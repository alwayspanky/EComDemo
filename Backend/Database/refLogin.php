<?php

class RefLoginUser{

public static function loginUser($user, $pass) {

        $aResult = array();

        $db = new Database();

        $sql = "SELECT * FROM `user_info` WHERE username='".$user."' AND password='".$pass."' ";

         //$aResult['trace']['sql'] = $sql;

        $result = $db->getConnection()->query($sql);

        

        if ($result->num_rows === 0) {

            $aResult['status']['code'] = 'NOT_FOUND';

            $aResult['status']['messge'] = "username or password are incorrect.";

        } else {

            while($row = $result->fetch_assoc()) {
                $aResult['output']['user_id'] = $row['user_id'];
                $aResult['output']['username'] = $row['username'];


                $aResult['status']['code'] = 'LOGIN_SUCCESSFULL';

                $aResult['status']['message'] = "Login Successfull.";

            }  

        } 

return $aResult;

    }


    //////////////////////////////////Register user function 

    public static function registerUser($user, $pass) {

        $aResult = array();

        $db = new Database();

        $sql = "INSERT INTO `user_info` (username , password) VALUES('".$user."', '".$pass."')";

        // $aResult['trace']['sql'] = $sql;

        if($db->getConnection()->query($sql) === FALSE){

            $aResult['status']['code'] = "FAILED_TO_CREATE_ACCOUNT";

            $aResult['status']['messge'] = "Failed to created account."; //RefMessge.getMessageByCode($aResult['status']['code']);

        } else {

            $user_id = $db->getConnection()->insert_id;

            $aResult['output']['user_id'] = $user_id;

            $aResult['status']['code'] = "ACCOUNT_CREATED";

            $aResult['status']['message'] = "Account created."; //RefMessge.getMessageByCode($aResult['status']['code']);

        }

        return $aResult;
    }

}

?>