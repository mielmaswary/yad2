<div id="ads-container" class=" flex-column align-center">
    <?php
    
       $sql='SELECT * FROM  ads';
       $result=mysqli_query($connection,$sql);
       while ($ads=mysqli_fetch_array($result)) {
           $price=$ads['price'];
           $adressNum=$ads['adressNum'];
           $cityName=$ads['cityName'];
           $street=$ads['street'];
           $roomsNum=$ads['roomsNum'];
           $size=$ads['size'];
           $floor=$ads['floor'];

           echo '
                          <div class="ad flex-row">
                               <div class="ad-img" style="background-image: url('.$movieImgUrl.')">
                                   <div class="heart-icon"></div>
                               </div>
                               <div class="info ">
                                   <div class="price font-weight-bold container-50">  '.$price.' ₪</div>
                                   <div class="adress bottom-line container-50 ">'.$street.','.$adressNum.','.$cityName.'</div>
                                   <div class="flex-row justify-space-around additional-info">
                                       <div><b>'.$roomsNum.'</b> חדרים</div>
                                       <div><b>'.$floor.'</b> קומה</div>
                                       <div><b>'.$size.'</b> מ"ר</div>
                                   </div>
                               </div>  
                          </div>
                       ';
               
       }
    ?>
<div>
  


