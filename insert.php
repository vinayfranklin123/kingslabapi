<?php
$conn = mysqli_connect("localhost","root","","user");
$info = json_decode(file_get_contents("php://input"));

 if(count($info) > 0)
 {

   $name = mysqli_real_escape_string($conn, $info->name);
   $email = mysqli_real_escape_string($conn, $info->email);
   $time = mysqli_real_escape_string($conn, $info->time);
   
   
   
   $query = "INSERT INTO newtable1(name, email, time) VALUES ('$name', '$email', '$time')";
   
   if(mysqli_query($conn, $query))
   {
      echo "Inserted Data";
   }
   else
   { echo "failed";
   }
 }




?>