var BaseURL = "http://192.168.1.37/EComDemo/Backend/Services/";

function getAllCart(){

    var user_id = localStorage.getItem("loginUserId");

    axios({
        method: 'post',
        url: BaseURL + "getCartItems.php",

        params:{
            "user_id": user_id
        }
        
        })
        .then(res =>{
            var data = res.data;
            
            for(let i = 0; i<=data.output.cart_item.length; i++){
                console.log(data.output.cart_item[i].p_name);

                document.getElementById("cartItem").innerHTML +=` <div style="background: #EBECF0; padding:10px; margin:30px; display:flex; width:50%" >
                <div>
                    <img style="width:200px; height:200px" src="${data.output.cart_item[i].p_image}" />
                </div>
                <div style="margin-left: 50px">
                <div style="display:flex">
                   
                    <h4 style="color:red">${data.output.cart_item[i].p_name}</h4>
                    </div>
                    <p>${data.output.cart_item[i].p_description}</p>
                    <h5>₹ ${data.output.cart_item[i].p_price}</h5>
                    <Button style="margin-top:30px" class="btn btn-success" onclick="addToCartItem(${data.output.cart_item[i].p_id})">Move to Wishlist</Button>
                    <Button style="margin-top:30px" class="btn btn-success" onclick="addToCartItem(${data.output.cart_item[i].p_id})">Remove Item</Button>

                </div>  
            </div>`
            }

        }, err=>{
            console.log(err)
        });

}

window.onload = getAllCart();