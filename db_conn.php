<?php
   $connection = mysqli_connect("localhost", "root", "", "Mahendra Bhaiya's Project");
   $query = "SELECT * FROM user_registration_tab;";
   if ($connection) {
      echo "";
   }else{
      die("conection failed, Sorry");
   }
?>