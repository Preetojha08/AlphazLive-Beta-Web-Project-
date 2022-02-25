<?php
   $connection = mysqli_connect("localhost", "root", "", "Mahendra Bhaiya's Project");
   $query = "SELECT * FROM login;";
   if ($connection) {
      echo "";
   }else{
      die("conection failed due to some reason");
   }
?>