<?php 

include("../Database/database.php");
include("../Database/refLogin.php");

header('Access-Control-Allow-Origin: *');


$name = $_REQUEST['username'];

$pass = $_REQUEST['password'];


    $userLogin = RefLoginUser::loginUser($name,$pass);

   

 echo json_encode($userLogin);

 

?>