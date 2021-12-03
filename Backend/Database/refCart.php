<?php

class RefCart{

    public static function addToCartItem($productId,$userId) {

        $aResult = array();

        $db = new Database();

        $sql = "INSERT INTO `cart_info` (`p_id`, `user_id`) VALUES('".$productId."', '".$userId."')";

        // $aResult['trace']['sql'] = $sql;

        if($db->getConnection()->query($sql) === FALSE){

            $aResult['status']['code'] = "FAILED_TO_ADDED";

            $aResult['status']['messge'] = "Failed to add cart item."; 

        } else {


            $aResult['status']['code'] = "ADDED TO CART";

            $aResult['status']['message'] = "Cart item added."; 
        }

        return $aResult;
    }


    ///// Get all cart item products area
    

    public static function getAllCartItems($userId) {
    }

}
?>