
var BaseURL = "http://192.168.1.37/EComDemo/Backend/Services/";


function loginUser(){

    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;

    axios({
        method: 'post',
        url: BaseURL + "login.php",
        
            params:{
                username: user,
                password: pass
            }
        
        })
.then(res =>{
    var data = res.data;
    
    console.log(data);

    if(data.status.code == "NOT_FOUND"){
        console.log("login failed");
        alert("Username or Password incorrect");
    }else{
        console.log("login successfull");
        window.history.forward();
        window.location.assign("Home.php");

    }
        

    
}, err=>{
    console.log(err)
});
}