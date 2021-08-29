<div id="ads-container" class=" flex-column align-center">
    <?php
    
       $sql='SELECT * FROM  ads';
       $result=mysqli_query($connection,$sql);
       while ($ads=mysqli_fetch_array($result)) {
           $price=$ads['price'];
           $adressNum=$ads['adressNum'];
           $cityName=$ads['cityName'];
           $street=$ads['street'];

           echo '
                          <div class="ad flex-row">
                               <div class="ad-img" style="background-image: url('.$movieImgUrl.')">
                                   <div class="heart-icon"></div>
                               </div>
                               <div class="info">
                                   <div class="price font-weight-bold">  '.$price.' ₪</div>
                                   <div class="adress">'.$street.','.$adressNum.','.$cityName.'</div>
                                   <div class="additional-info"></div>
                               </div>  
                          </div>
                       ';
               
       }
    ?>
<div>
  


