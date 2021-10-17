<?php
      require_once('./db/dbCon.php');
      require_once('./user/auth-utils/validation.php');
      require_once('./db/addUser.php');
      $isSetRegisterDetails=isset($_GET['email'])&&isset($_GET['password'])&&isset($_GET['passwordAuth']);
      if($isSetRegisterDetails){
          global $registerDetailsValidionStatus;
          global $email;
          global $password;
          global $passwordAuth;

          $email=$_GET['email'];
          $password=$_GET['password'];
          $passwordAuth=$_GET['passwordAuth'];
         

          $registerDetailsValidionStatus=registerDetailsValidionStatus($email,$password,$passwordAuth);
          if(isValidRegisterDtails($registerDetailsValidionStatus)){
            //    require_once('.././sccessful-registration.php');   

               addUser($password , $email);
          }
                     
      }
   
?>