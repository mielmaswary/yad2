<?php

    function emailValidionStatus($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL) &&$email!='' ) 
           return true;
        return 'Invalid Email!';
            
    }

    function passwordValidionStatus($password){
        if (preg_match("/^[a-zA-Z-' ]*$/",$password)&&$password!='') 
           return true;
        return 'Invalid Password!';
    }

    function  passwordAuthValidionStatus($password,$passwordAuth){
        if($password===$passwordAuth)
            return true;
        return 'Passwords do not match!';
    }

    function registerDetailsValidionStatus($email,$password,$passwordAuth){
        return
        [
            emailValidionStatus($email),
            passwordValidionStatus($password),
            passwordAuthValidionStatus($password,$passwordAuth)
        ];
    }


    function printError($validionStatus){
        if($validionStatus!=1)
           echo $validionStatus;
    }

    function isValidRegisterDtails($registerDetailsValidionStatus){
        foreach ($registerDetailsValidionStatus as $value)
           if ($value!=1)
               return false;
        return true;

    } 
?>