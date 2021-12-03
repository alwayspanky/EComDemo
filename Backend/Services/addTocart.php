<?php 

include("../Database/database.php");
include("../Database/refCart.php");

header('Access-Control-Allow-Origin: *');


$productId = $_REQUEST['p_id'];

$userId = $_REQUEST['user_id'];


    $addCart = RefCart::addToCartItem($productId,$userId);

   

 echo json_encode($addCart);

 

?>