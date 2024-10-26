<?php
   $valid_username="mariya123@gmail.com";
   $valid_password="mariya1234";

   $user_username=$_POST["email"];
   $user_password=$_POST["pwd"];

   echo  "<b>Username:</b>$user_username" ; 
   echo "<br>";

   echo "<b>Password</b>:$user_password"; 

   echo "<br>";

   if($valid_username==$user_username && $valid_password==$user_password)
   {
        echo "User Logged In Successfully";
   }
   else{
    echo "invalid data";
   }
?>
