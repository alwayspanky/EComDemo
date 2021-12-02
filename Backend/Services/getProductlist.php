<?php 

include("../Database/database.php");
include("../Database/refProduct.php");

header('Access-Control-Allow-Origin: *');

$category_id = $_REQUEST['categoryId'];

    $productList = RefProductList::getAllProduct($category_id);

 echo json_encode($productList);

?>