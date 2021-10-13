<?php
   require_once('../includes/htmlStart.php');
?>

<div class="container-fluid">
   <div class="back-btn-icon"></div>
   <div class="password-img"></div>
   <div class="text-align-center font-size-large font-weight-bold">חידוש סיסמא</div>
   <div class="text-align-center margin-bottom-4">מה המייל שלך? מייד נשלח לך קוד לחידוש הסיסמא</div>
   <form action="../index.php" class="flex-column">
       <div class="margin-8">מייל</div>
       <input type="mail" class="padding-10 flex-grow-4 margin-bottom-10 margin-8" placeholder="yourmail@mail.co.il">
       <input type="submit" value="שלחו לי את הקוד" class="user-form-btn white orange-bold-bg">
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