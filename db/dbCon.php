<?php

   
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
?>