<?php

   
// $connection=mysqli_connect("localhost","root", "");
// if(mysqli_connect_errno())
//      {
//          echo "error!".mysqli_connect_error();
//      }
// $sql='USE yad2';
// if(mysqli_query($connection,$sql))
// {
// //    echo "Using yad2. </br>";
// }
// else
// {
//     echo "Error ".mysqli_error($connection);
// }
?>



<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

if(mysqli_connect_errno())
     {
         echo "error!".mysqli_connect_error();
     }
    
    
 $sql='USE heroku_bd68ab929265b41';
 if(mysqli_query($conn,$sql))
 {
      
 }
 else
 {
     echo "Error!!!!! ".mysqli_error($conn);
 }
?>