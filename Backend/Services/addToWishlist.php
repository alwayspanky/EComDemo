<?php 

include("../Database/database.php");
include("../Database/refWishlist.php");

header('Access-Control-Allow-Origin: *');


$productId = $_REQUEST['p_id'];

$userId = $_REQUEST['user_id'];


    $addWishlist = RefWishlist::addToWishlistItem($productId,$userId);

   

 echo json_encode($addWishlist);

 

?>