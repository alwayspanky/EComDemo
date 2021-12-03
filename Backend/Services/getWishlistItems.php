<?php 

include("../Database/database.php");
include("../Database/refWishlist.php");

header('Access-Control-Allow-Origin: *');

$userId = $_REQUEST['user_id'];


    $wishlistItems = RefWishlist::getAllWishlistItem($userId);

   

 echo json_encode($wishlistItems);

 

?>