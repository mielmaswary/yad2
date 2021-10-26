<?php

   require_once('dbCon.php');
   function addUser($password, $email){
       $password=password_hash($password,PASSWORD_DEFAULT);
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

       $sql="INSERT INTO `users` (`firstName`, `lastName`, `password`, `email`) VALUES (NULL, NULL, '$password', '$email')" ;     
       if(mysqli_query($connection,$sql))
       {
           
       }
       else
       {
           echo "Error ".mysqli_error($connection);
       }
   }

    
?>