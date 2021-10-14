<?php

    function isValidEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
           return false;
        return true;
            
    }

    function isValidPassword($password){
        if (preg_match("/^[a-zA-Z-' ]*$/",$password)) 
           return true;
        return 'ttt';
    }

    function  isValidPasswordAuth($passwordAuth){
        return true;
    }

    function isValidRegisterDetails($email,$password,$passwordAuth){
        return
        isValidEmail($email)&&
        isValidPassword($password)&&
        isValidPasswordAuth($passwordAuth);
    }



?>