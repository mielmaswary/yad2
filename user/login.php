<?php
   require_once('../includes/htmlStart.php');
   require_once('./auth-utils/login-validation.php');
   require_once('../db/dbCon.php');
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
          if(isValidRegisterDtails($registerDetailsValidionStatus)){
               require_once('./sccessful-registration.php');   
               addUser($password , $email);
          }
                     
     }
   
?>


<div class="container-fluid">
   <div class="back-btn-icon"></div>
   <div class="password-img"></div>
   <div class="text-align-center font-size-large font-weight-bold">היי, טוב לראות אותך</div>
   <form action="../index.php" class="flex-column">
       <div class="margin-8">מייל</div>
       <input type="mail"  name="email" class="padding-10   margin-8" placeholder="yourmail@mail.co.il">
       <div class="margin-8" >סיסמה</div>
       <input type="password" name="password" class="padding-10  margin-8" placeholder="הקלדת סיסמה">
       <div class="flex-row justify-end margin-8"><div class="orange-bold forgot-password-btn">שכחתי סיסמה</div></div>
       <input type="submit" value="התחברות" class="user-form-btn white orange-bold-bg">
   </form>
   <br>
   <div class="flex-row  justify-center">
       <div class="margin-4">אין לך חשבון?</div>
       <div class="orange margin-4 register-btn">להרשמה</div>
    </div>

</div>

<?php
   require_once('../includes/htmlEnd.php');
?>