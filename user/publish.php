<?php
   require_once('../includes/htmlStart.php');
?>
<div class=" ">
       <?php 
          require_once('../includes/modal.php');
          require_once('./ad-type-modal.php');
          require_once('./publish-utils/getCloseModeDisplay.php');
       ?>
       <div class="flex-row justify-space-between margin-5">
          <div class="yad2-logo icon-min-mid-size"></div>
          <div class="flex-row align-center  ">
             <div class="loginIcon icon-min-small-size "></div>
             <div class="orange margin-4 white-space-nowrap ">מיאל מסוארי</div>
             <div class="margin-4 white-space-nowrap">צור קשר</div>
          </div>
       </div>
      <div class="font-size-large text-align-center margin-20 white-space-nowrap">אני רוצה לפרסם מודעה בלוח...</div>
      <?php
          require_once('./publish-includes/categories.php');
          
          getCloseModeDisplay('באיזו קטגוריה נפרסם היום?');
          require_once('./publish-includes/sub-categories.php');
          getCloseModeDisplay('כתובת הנכס');
          require_once('./publish-includes/adress.php');
          getCloseModeDisplay('על הנכס ');
          require_once('./publish-includes/appartment-details.php');
          getCloseModeDisplay('תשלומים תאריכים ועוד');  
          require_once('./publish-includes/paymentAndDates.php');
          getCloseModeDisplay('תמונות וסרטונים ');  
          require_once('./publish-includes/imagesAndVideo.php');
          getCloseModeDisplay('פרטים ליצירת קשר ');  
          require_once('./publish-includes/contactDetails.php');
          getCloseModeDisplay('סיום פרסום ');  
          require_once('./publish-includes/adComplete.php');  

      ?>

</div>




<?php

   require_once('../includes/htmlEnd.php');
?>

