<?php
     require_once('dbCon.php');
     $sql="CREATE TABLE `ads` (
        `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        `apartmentType` varchar(10)  DEFAULT NULL,
        `cityName` varchar(15)  DEFAULT NULL,
        `cityType` varchar(10)  DEFAULT NULL,
        `street` varchar(15)  DEFAULT NULL,
        cinemaName VARCHAR (50)
        `adressNum` int(8) DEFAULT NULL,
        `floor` int(4) DEFAULT NULL,
        `totalsFloors` int(4) DEFAULT NULL,
        `pillars` tinyint(1) DEFAULT NULL,
        `neighborhood` varchar(5)  DEFAULT NULL,
        `area` varchar(15)  DEFAULT NULL,
        `roomsNum` int(2) DEFAULT NULL,
        `size` int(5) DEFAULT NULL,
        `groundFloor` tinyint(1) DEFAULT NULL,
        `bars` tinyint(1) DEFAULT NULL,
        `pandor` tinyint(1) DEFAULT NULL,
        `mmd` tinyint(1) DEFAULT NULL,
        `furnished` tinyint(1) DEFAULT NULL,
        `parking` tinyint(1) DEFAULT NULL,
        `pets` tinyint(1) DEFAULT NULL,
        `garage` tinyint(1) DEFAULT NULL,
        `partners` tinyint(1) DEFAULT NULL,
        `airConditioner` tinyint(1) DEFAULT NULL,
        `invalids` tinyint(1) DEFAULT NULL,
        `longTime` tinyint(1) DEFAULT NULL,
        `porch` tinyint(1) DEFAULT NULL,
        `renovated` tinyint(1) DEFAULT NULL,
        `exclusivity` tinyint(1) DEFAULT NULL,
        `price` int(10) DEFAULT NULL,
        `entryDate` date DEFAULT NULL,
        `img1` varchar(300)  DEFAULT NULL,
        `img2` varchar(300)  DEFAULT NULL,
        `img3` varchar(300)  DEFAULT NULL,
        `movie` varchar(300)  DEFAULT NULL,
        `awnerID` int(15) DEFAULT NULL,
        UNIQUE KEY `id` (`id`)
      ) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;"; 


      if(mysqli_query($connection,$sql))
      {
         
      }
      else
      {
          echo "Error ".mysqli_error($connection);
      }


      $sql="CREATE TABLE `users` ( `firstName` VARCHAR(20) NULL DEFAULT NULL , `lastName` VARCHAR(20) NULL DEFAULT NULL , `password` VARCHAR(20) NULL DEFAULT NULL , `phone` VARCHAR(20) NULL DEFAULT NULL , `email` VARCHAR(20) NULL DEFAULT NULL , `ads` VARCHAR(30) NULL DEFAULT NULL ) ENGINE = MyISAM;";
      
      if(mysqli_query($connection,$sql))
      {
         
      }
      else
      {
          echo "Error ".mysqli_error($connection);
      }

   

     
?>