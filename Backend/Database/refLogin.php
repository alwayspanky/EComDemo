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

                // $aResult['output']['user_id'] = $row['user_id'];

                // $aResult['output']['name'] = $row['name'];

                $aResult['status']['code'] = 'LOGIN_SUCCESSFULL';

                $aResult['status']['message'] = "Login Successfull.";

            }  

        } 

return $aResult;

    }

}

?>