<?php
   require_once('../includes/htmlStart.php');
   require_once('../db/dbCon.php');
   require_once('./auth-utils/register-validation.php');
   require_once('../db/addUser.php');
  

?>

<?php

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
         //  if(isValidRegisterDtails($registerDetailsValidionStatus)){
         //       require_once('./sccessful-registration.php');   
         //       addUser($password , $email);
         //  }
                     
     }

   
?>

<div class="container-fluid">
   <div class="back-btn-icon"></div>
   <div class="user-face-img"></div>
   <div class="text-align-center font-size-large font-weight-bold">היי, נעים להכיר</div>
   <form action="../index.php" class="flex-column">
       <div class="margin-8">מייל</div>
       <input type="email" name="email" class="padding-10   margin-8" placeholder="yourmail@mail.co.il">
       <div class="red  margin-8"><?php   if($isSetRegisterDetails){printError($registerDetailsValidionStatus[0]);}  ?></div>
       <div class="margin-8">סיסמה</div>
       <input type="password" name="password" class="padding-10  margin-8" placeholder="הקלדת סיסמה">
       <div class="red  margin-8"><?php if($isSetRegisterDetails){printError($registerDetailsValidionStatus[1]);}  ?></div>
       <div class="margin-8">אימות סיסמה</div>
       <input type="password" name="passwordAuth" class="padding-10   margin-8" placeholder="הקלדת סיסמה">
       <div class="red margin-bottom-10  margin-8"><?php if($isSetRegisterDetails){printError($registerDetailsValidionStatus[2]);}  ?></div>
       <input type="submit" value="הרשמה" class="user-form-btn white orange-bold-bg">
   </form>
   <br>
   <div class="flex-row  justify-center">
       <div class="margin-4 ">כבר יש לך חשבון?</div>
       <div class="orange margin-4 login-btn">להתחברות</div>
    </div>

</div>

<?php
   require_once('../includes/htmlEnd.php');
?>