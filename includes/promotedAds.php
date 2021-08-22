    <div class="container-fluid">
       <div class="flex-row justify-center container-over-flow-hidden">
            <?php
             $sql='SELECT * FROM  ads';
             $result=mysqli_query($connection,$sql);
             while ($ads=mysqli_fetch_array($result)) {
                
                  $price=$ads['price'];
                  $adressNum=$ads['adressNum'];
                  $cityName=$ads['cityName'];
                  $street=$ads['street'];
                  $movieImgUrl=$ads['img1'];
     
                        echo '
                                 <div class="promoted-ad">
                                      <div class="promoted-ad-img" style="background-image: url('.$movieImgUrl.')">
                                          <div class="heart-icon"></div>
                                      </div>
                                      <div class="new-project"> פרויקט חדש<div class="triangle-right"></div></div>
                                      <div class="promoted-ad-info white-bg padding-4">
                                          <div class="adress">'.$street.','.$adressNum.'</div>
                                          <div class="adress">'.$cityName.'</div>
                                      </div>  
                                 </div>
                              ';
                        echo "<br>";
                
              
             }

            
           ?>
       </div>
       
    <div>
