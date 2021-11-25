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

        <h1><span>Register User</span></h1>
        <lable style=" color:#FF0000;">*</lable>
        <Input id="user" type="text" placeholder="username" > <br>
        <lable style=" color:#FF0000;">*</lable>
        <Input style="margin-top:20px;" id="pass" type="text" placeholder="Password"></br>

        <Input style="margin-top:20px; margin-left:10px" id="cpass" type="text" placeholder="Confirm Password"></br>

        <Button style="margin-top:20px;" onclick="RegisterUser()"  class="btn-primary">Register</Button><br>
        <lable><a href="index.php" style="text-decoration:none; color:#FF0000;">If already have account, Login?</a></lable>

    </div>
    </body>
    
</html>