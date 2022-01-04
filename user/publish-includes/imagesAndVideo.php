<div id="imagesAndVideoContainer" class="display-none">
     <div class="flex-row flex-wrap justify-space-around padding-16-8 font-size-small bright-grey">
          <div class="margin-10 main-text-color">ידעת שמודעות עם תמונות ברורות מקבלות פי 10 יותר פניות?
                 לא להסס להעלות לפה תמונות (אפשר עד 10 + וידאו) ולהבליט את הצדדים הטובים ביותר של הנכס
         </div>
         
         <div class="flex-rect-dashed margin-5 flex-column justify-end videoIcon background-size-20 flex-column padding-3prec">
               <div class="text-align-center ">העלאת סרטון</div>
          </div>
               <?php
                   createMainImageUploadBtn("imageBtn1");
               ?>
          
     </div>
     
     <div class="padding-16-8">
          <div class="dark-thin-separator-line"></div>
     </div>
     
     <div class="flex-row flex-wrap justify-space-around padding-16-8 font-size-small bright-grey">
          <?php
             imageLocalUpload(); 
             $imageBtnId="imageBtn";
             for($i=2;$i<=10;$i++){
                 createImageUploadBtn($imageBtnId.$i);
             }
          ?>
        
     </div>

     <div class="flex-row justify-space-between">
            <div id="backToPaymentAndDatesBtn" class="btn-ellips grey-border padding-4-8">&nbsp;&nbsp;חזרה&nbsp;&nbsp;</div>
            <div id="openContactDetailsBtn" class="btn-ellips orange orange-border padding-4-8">&nbsp;&nbsp;המשך&nbsp;&nbsp;</div>
        </div>
</div>


<?php
   function createImageUploadBtn($id){
       echo 
       '<div class="flex-rect-dashed margin-5 flex-column justify-end plus-icon background-size-20 flex-column padding-3prec relative">
          <input id="'.$id.'"  type="file" name="imageUpload" class="text-align-center padding-20 opacity0 absolute-center width-100 " ><div class="text-align-center"> העלאת תמונות</div> 
       </div>';
   }

   function createMainImageUploadBtn($id){
     echo 
     '<div class="flex-rect-dashed margin-5 flex-column justify-end plus-icon background-size-20 flex-column padding-3prec relative">
        <div class="absolute-top-center width-100 grey-bg white-space-nowrap text-align-center main-text-color padding-4"> תמונה ראשית</div>
        <input id="'.$id.'"  type="file" name="imageUpload" class="text-align-center padding-20 opacity0 absolute-center width-100 " ><div class="text-align-center"> העלאת תמונות</div> 
     </div>';
    }

    function imageLocalUpload(){
        print_r($_FILES['imageUpload']);
    }

?>

