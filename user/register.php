<?php
   require_once('../includes/htmlStart.php');
?>

<div class="container-fluid">
   <div class="back-btn-icon"></div>
   <div class="user-face-img"></div>
   <div class="text-align-center font-size-large font-weight-bold">היי, נעים להכיר</div>
   <form action="../index.php" class="flex-column">
       <div class="margin-8">מייל</div>
       <input type="mail" class="padding-10   margin-8" placeholder="yourmail@mail.co.il">
       <div class="margin-8">סיסמה</div>
       <input type="password" class="padding-10  margin-8" placeholder="הקלדת סיסמה">
       <div class="margin-8">אימות סיסמה</div>
       <input type="password" class="padding-10  margin-bottom-10 margin-8" placeholder="הקלדת סיסמה">
       <input type="submit" value="שלחו לי את הקוד" class="user-form-btn white orange-bold-bg">
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