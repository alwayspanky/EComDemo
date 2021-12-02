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
                    <h4 style="color:red">${data.output.products[i].p_name}</h4>
                    <p>${data.output.products[i].p_description}</p>
                    <h5>₹ ${data.output.products[i].p_price}</h5>
                    <Button style="margin-top:30px" class="btn btn-success">Buy Now</Button>
                </div>  
            </div>`
            }

        }, err=>{
            console.log(err)
        });
}

window.onload = getProducts();