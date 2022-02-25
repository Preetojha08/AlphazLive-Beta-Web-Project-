<?php 
require 'db_conn.php';
if (isset($_POST['reg'])) {
   if (!$_POST['reg_user_name'] OR !$_POST['reg_personal_email'] OR !$_POST['reg_password'] OR !$_POST['reg_org_email'] OR !$_POST['reg_org_name'] OR !$_POST['reg_user_role'] OR !$_POST['reg_user_mobile']) {
      header('Location: error.php');
   }else{
    
      $reg_u_name = mysqli_real_escape_string($connection, $_POST['reg_user_name']);
      $reg_per_email = mysqli_real_escape_string($connection, $_POST['reg_personal_email']);
      $reg_pass = mysqli_real_escape_string($connection, $_POST['reg_password']);

      $reg_org_email = mysqli_real_escape_string($connection, $_POST['reg_org_email']);
      $reg_org_name = mysqli_real_escape_string($connection, $_POST['reg_org_name']);
      $reg_u_role = mysqli_real_escape_string($connection, $_POST['reg_user_role']);

      $reg_u_mobile = mysqli_real_escape_string($connection, $_POST['reg_user_mobile']);

      // $reg_pass = password_hash($password, PASSWORD_DEFAULT);

      $select_query = "SELECT * FROM user_registration_tab WHERE password = '$reg_pass' AND email = '$reg_per_email' AND name = '$reg_u_name' AND org_email = '$reg_org_email' AND org_name = '$reg_org_name' AND user_role = '$reg_u_role' AND mobile_no = '$reg_u_mobile'";
      $select_query_result = mysqli_query($connection, $select_query);
      if (mysqli_num_rows($select_query_result) > 0) {
         header('Location: error.php');
      }else{
         $query = "INSERT INTO user_registration_tab (per_email, name, password, org_email, org_name, user_role, mobile_no)
         VALUES ('$reg_per_email', '$reg_u_name', '$reg_pass','$reg_org_email','$reg_org_name','$reg_u_role','$reg_u_mobile')";

         $query_result = mysqli_query($connection, $query);
         if (!$query_result) {
            die("Query failed ". mysqli_error($connection));
         }else{
            header('Location: animation img slider/index.html');
         }
      }
   }
}
?>
