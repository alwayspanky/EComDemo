
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
        document.getElementById("user").value = "";
    }else{
        console.log("login successfull");
        window.history.forward();
        window.location.assign("Home.php");

    }
        

    
}, err=>{
    console.log(err)
});
}


///////////////Register user area 

function RegisterUser(){

    var user = document.getElementById("user").value;
    var pass = document.getElementById("pass").value;
    var cpass = document.getElementById("cpass").value;

    if(user == ""){
        alert("Please enter username")
    }else if(pass == ""){
        alert("Please enter Password")
    }else if(pass == cpass){
                    axios({
                        method: 'post',
                        url: BaseURL + "registerUser.php",
                        
                            params:{
                                username: user,
                                password: pass
                            }
                        
                        })
                .then(res =>{
                    var data = res.data;
                    
                    console.log(data);
                
                    if(data.status.code == "ACCOUNT_CREATED"){
                        console.log("Thank you for registration.");
                        alert("Thank you for registration.");
                        window.location.assign("index.php");
                    }else{
                        console.log("Registration failed");
                        alert("Username or Password incorrect to register");
                        document.getElementById("user").value = "";
                
                    }
                        
                
                    
                }, err=>{
                    console.log(err)
                });
    }else{

        alert("password not matched");
    }

  
}
