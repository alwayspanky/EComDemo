<!DOCTYPE html>
<html>
    <head>
        <title>
            EComDemo
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <script src="Controller/userLogin.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

      
    </head>
    <body >

    <div style="display:block; margin-top:200px; margin-left:200px; justify-content:center">

        <h1><span>Login</span></h1>

        <Input id="user" type="text" placeholder="username" > <br>

        <Input style="margin-top:20px;" id="pass" type="password" placeholder="Password"></br>

        <Button style="margin-top:20px;" onclick="loginUser()"  class="btn-primary">Login</Button><br>
        <lable><a href="Signup.php" style="text-decoration:none; color:#FF0000;">Don't have an account, Register?</a></lable>

    </div>
    </body>
    
</html>