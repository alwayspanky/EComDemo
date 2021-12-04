var BaseURL = "http://192.168.1.37/EComDemo/Backend/Services/";

function getProducts(){

    var catId = localStorage.getItem("category_id");

    axios({
        method: 'post',
        url: BaseURL + "getProductList.php",

        params:{
            "categoryId": catId
        }
        
        })
        .then(res =>{
            var data = res.data;
            
            for(let i = 0; i<=data.output.products.length; i++){
                console.log(data.output.products[i].p_name);

                document.getElementById("product").innerHTML +=` <div style="background: #EBECF0; padding:10px; margin:30px; display:flex; width:50%" >
                <div>
                    <img style="width:200px; height:200px" src="${data.output.products[i].p_image}" />
                </div>
                <div style="margin-left: 50px">
                <div style="display:flex">
                   
                    <h4 style="color:red">${data.output.products[i].p_name}</h4>
                    <a onclick="addItemToWishlist(${data.output.products[i].p_id})"><img  style="margin-left:50px" src="https://img.icons8.com/material-outlined/24/000000/like--v1.png"/></a>
                    </div>
                    <p>${data.output.products[i].p_description}</p>
                    <h5>₹ ${data.output.products[i].p_price}</h5>
                    <Button style="margin-top:30px" class="btn btn-success" onclick="addToCartItem(${data.output.products[i].p_id})">Add to cart</Button>
                </div>  
            </div>`
            }

        }, err=>{
            console.log(err)
        });

}

function addToCartItem(pId){

    var userId = localStorage.getItem("loginUserId");

    axios({
        method: 'post',
        url: BaseURL + "addToCart.php",

        params:{
            "p_id": pId,
            "user_id": userId
        }
        
        })
        .then(res =>{
            var data = res.data;

            if(data.status.code == "ADDED TO CART"){
                alert("Added to cart");
            }else{
                alert("Failed to Add cart");
            }

        }, err=>{
            console.log(err)
        });


}

function addItemToWishlist(pId){

    var userId = localStorage.getItem("loginUserId");

    console.log("productId",pId);
    console.log("userId",userId);

    alert("Added to wishlist");
    

}

window.onload = getProducts();