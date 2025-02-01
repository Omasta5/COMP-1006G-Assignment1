<?php 
    class validate{
        // checkEmpty function
        public function checkEmpty($data, $fields){
            $msg = null;
            foreach ($fields as $value){
                if(empty($data[$value])){
                    $msg .= "<p>Sorry, but $value field cannot be empty dumbass >:/</p>";
                }
            }
            return $msg;
        }
        // validFName function
        public function validFName($fname){
            if(preg_match("/^[a-zA-Z]+$/", $fname)){
                return true;
            }
            return false;
        }
        // validLName function
        public function validLName($lname){
            if(preg_match("/^[a-zA-Z]+$/", $lname)){
                return true;
            }
            return false;
        }
        // validEmail function
        public function validEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
        }
        // validAge function
        public function validAge($age){
            if(preg_match("/^[0-9]+$/", $age)){
                return true;
            }
            return false;
        }
        // validPhone function
        public function validPhone($phone){
            if(preg_match("/^[0-9-()]+$/", $phone)){
                return true;
            }
            return false;
        }
    }
?>
