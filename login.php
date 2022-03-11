<?php 
require 'db_conn.php';
if (isset($_POST['login'])) {
   if (!$_POST['log_email'] OR !$_POST['log_pass']) {
      header('Location: new_error.php');
   }else{
      $email = mysqli_real_escape_string($connection, $_POST['log_email']);
      $password = mysqli_real_escape_string($connection, $_POST['log_pass']);
      // $password = password_hash($password, PASSWORD_DEFAULT);

      $select_query = "SELECT * FROM login WHERE u_password = '$password' AND u_email = '$email'";
      $select_query_result = mysqli_query($connection, $select_query);
      if (mysqli_num_rows($select_query_result) > 0) {
         // $query = "INSERT INTO login (email, password)
         // VALUES ('$email', '$password')";

         $query_result = mysqli_query($connection, $query);
         if (!$query_result) {
            die("Query failed ". mysqli_error($connection));
         }else{
            header('Location: index.php');
         }
      }else{
         header('Location: error.php');
      }
   }
}
?>
