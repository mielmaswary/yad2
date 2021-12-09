<?php
   require_once('dbCon.php');
   function addAd($apartmentType,$cityName,$cityType,$street,$adressNum,$floor,$totalsFloors,$pillars,$neighborhood,$area,$roomsNum,$size,$groundFloor,$bars,$pandor,$mmd,$furnished,$parking,$pets,$garage,$partners,$airConditioner,$invalids,$longTime,$porch,$renovated,$exclusivity,$price,$entryDate,$img1,$img2,$img3,$movie,$awnerID){
       $connection=mysqli_connect("localhost","root", "");
       if(mysqli_connect_errno())
            {
                echo "error!".mysqli_connect_error();
            }
       $sql='USE yad2';

       if(mysqli_query($connection,$sql))
       {
       //    echo "Using yad2. </br>";
       }
       else
       {
           echo "Error ".mysqli_error($connection);
       }
       $sql="INSERT INTO `ads` (`apartmentType`, `cityName`, `cityType`, `street`, `adressNum`, `floor`, `totalsFloors`, `pillars`, `neighborhood`, `area`, `roomsNum`, `size`, `groundFloor`, `bars`, `pandor`, `mmd`, `furnished`, `parking`, `pets`, `garage`, `partners`, `airConditioner`, `invalids`, `longTime`, `porch`, `renovated`, `exclusivity`, `price`, `entryDate`, `img1`, `img2`, `img3`, `movie`, `awnerID`) VALUES ('$apartmentType', '$cityName', '$cityType', '$street', $adressNum, $floor, $totalsFloors, $pillars, '$neighborhood', '$area', $roomsNum, $size, $groundFloor, $bars, $pandor, $mmd, $furnished, $parking, $pets, $garage, $partners, $airConditioner, $invalids, $longTime, $porch, $renovated, $exclusivity, $price, '$entryDate', '$img1', '$img2', '$img3', '$movie', $awnerID);";   

       if(mysqli_query($connection,$sql))
       {
           
       }
       else
       {
           echo "Error ".mysqli_error($connection);
       }
   }



//    function addAd($apartmentType){
       
//     $connection=mysqli_connect("localhost","root", "");
//     if(mysqli_connect_errno())
//          {
//              echo "error!".mysqli_connect_error();
//          }
//     $sql='USE yad2';

//     if(mysqli_query($connection,$sql))
//     {
//     //    echo "Using yad2. </br>";
//     }
//     else
//     {
//         echo "Error ".mysqli_error($connection);
//     }

//     $sql="INSERT INTO `ads` (`apartmentType`) VALUES ('$apartmentType');";   

//     if(mysqli_query($connection,$sql))
//     {
//         echo 'sucsses!';
//     }
//     else
//     {
//         echo "Error ".mysqli_error($connection);
//     }
// }


?>