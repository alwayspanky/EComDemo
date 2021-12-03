<?php 

include("../Database/database.php");
include("../Database/refCart.php");

header('Access-Control-Allow-Origin: *');


$userId = $_REQUEST['user_id'];


    $getCartItem = RefCart::getAllCartItems($userId);
    

 echo json_encode($getCartItem);

 

?>