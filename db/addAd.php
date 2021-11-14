<?php

   require_once('dbCon.php');
   function addAd($id, $apartmentType, $cityName, $cityType, $street, $adressNum, $floor, $totalsFloors, $pillars, $neighborhood, $area, $roomsNum, $size, $groundFloor, $bars, $pandor, $mmd, $furnished, $parking, $pets, $garage, $partners, $airConditioner, $invalids, $longTime, $porch, $renovated, $exclusivity, $price, $entryDate, $img1ID, $img2ID, $img3ID, $movieID, $awnerID){
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

       $sql="INSERT INTO `ads` (`id`, `apartmentType`, `cityName`, `cityType`, `street`, `adressNum`, `floor`, `totalsFloors`, `pillars`, `neighborhood`, `area`, `roomsNum`, `size`, `groundFloor`, `bars`, `pandor`, `mmd`, `furnished`, `parking`, `pets`, `garage`, `partners`, `airConditioner`, `invalids`, `longTime`, `porch`, `renovated`, `exclusivity`, `price`, `entryDate`, `img1ID`, `img2ID`, `img3ID`, `movieID`, `awnerID`) VALUES ($id, '$apartmentType', '$cityName', '$cityType', '$street', $adressNum, $floor, $totalsFloors, $pillars, '$neighborhood', '$area', $roomsNum, $size, $groundFloor, $bars, $pandor, $mmd, $furnished, $parking, $pets, $garage, $partners, $airConditioner, $invalids, $longTime, $porch, $renovated, $exclusivity, $price, $entryDate, $img1ID, $img2ID, $img3ID, $movieID, $awnerID);";   
         
       if(mysqli_query($connection,$sql))
       {
           
       }
       else
       {
           echo "Error ".mysqli_error($connection);
       }
   }

    
?>