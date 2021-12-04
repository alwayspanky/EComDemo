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

        $aResult = array();

        $db = new Database();

        $sql ="SELECT * FROM `cart_info` INNER JOIN `product_info` ON cart_info.p_id = product_info.p_id  WHERE user_id='".$userId."' ";

         $result = $db->getConnection()->query($sql);

        if ($result->num_rows === 0) {

            $aResult['status']['code'] = 'INTERNAL_ERROR';

            $aResult['status']['messge'] = "Internal Error has occured.";

        } else {

            while($row = $result->fetch_assoc()) {

                $aResult['output']['cart_item'][] = $row;

            }

            

            $aResult['status']['code'] = 'SUCCESS';

            $aResult['status']['message'] = "Query completed successfully.";

        }

        

return $aResult;


    }

}
?>