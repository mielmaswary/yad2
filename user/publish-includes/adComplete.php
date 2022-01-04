<?php

    require_once('C:\wamp64\www\firstphp\yad2\includes\htmlStart.php');
    require_once('C:\wamp64\www\firstphp\yad2\db\addAd.php');
    if(isset($_GET['apartmentType'])){
      echo '1';
     //  addAd($_GET['apartmentType'],$_GET['cityName'],$_GET['street'],$_GET['adressNum'],$_GET['floor'],$_GET['totalsFloors'],$_GET['pillars'],$_GET['neighborhood'],$_GET['area'],$_GET['roomsNum'],$_GET['size'],$_GET['groundFloor'],$_GET['bars'],$_GET['pandor'],$_GET['mmd'],$_GET['furnished'],$_GET['porch'],$_GET['pets'],$_GET['garage'],$_GET['partners'],$_GET['airConditioner'],$_GET['invalids'],$_GET['longTime'],$_GET['porch'],$_GET['renovated'],$_GET['exclusivity'],$_GET['price'],$_GET['entryDate'],$_GET['img1'],$_GET['img2'],$_GET['img3'],$_GET['movie'],$_GET['awnerID']);
       addAd($_GET['apartmentType'],$_GET['cityName'],$_GET['street'],$_GET['adressNum'],$_GET['floor'],$_GET['totalsFloors'],$_GET['neighborhood'],$_GET['area'],$_GET['size'],$_GET['bars'],$_GET['mmd'],$_GET['furnished'],$_GET['porch'],$_GET['pets'],$_GET['garage'],$_GET['partners'],$_GET['airConditioner'],$_GET['invalids'],$_GET['longTime'],$_GET['porch'],$_GET['renovated'],$_GET['price'],$_GET['entryDate'],$_GET['img1'],$_GET['img2'],$_GET['img3'],$_GET['movie'],$_GET['awnerID']);

      }
     
?>
     <div class="flex-row justify-space-between margin-5">
           <div class="yad2-logo icon-min-mid-size"></div>
           <div class="flex-row align-center  ">
                <div class="loginIcon icon-min-small-size "></div>
                <div class="orange margin-4 white-space-nowrap ">מיאל מסוארי</div>
                <div class="margin-4 white-space-nowrap">צור קשר</div>
           </div>
       </div>
     
     <div class="orange text-align-center font-size-35">סיימת!</div>



<?php

    require_once('C:\wamp64\www\firstphp\yad2\includes\htmlEnd.php');
?>