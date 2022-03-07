<?php 
require 'db_conn.php';
if (isset($_POST['reg'])) {
   if (!$_POST['reg_name'] OR !$_POST['reg_email'] OR !$_POST['reg_pass'] OR !$_POST['reg_org_email'] OR !$_POST['reg_org_name'] OR !$_POST['reg_u_role'] OR !$_POST['reg_u_mobile']) {
      header('Location: new_error.php');
   }else{
    
      $reg_u_name = mysqli_real_escape_string($connection, $_POST['reg_name']);
      $reg_per_email = mysqli_real_escape_string($connection, $_POST['reg_email']);
      $reg_pass = mysqli_real_escape_string($connection, $_POST['reg_pass']);

      $reg_org_email = mysqli_real_escape_string($connection, $_POST['reg_org_email']);
      $reg_org_name = mysqli_real_escape_string($connection, $_POST['reg_org_name']);
      $reg_u_role = mysqli_real_escape_string($connection, $_POST['reg_u_role']);

      $reg_u_mobile = mysqli_real_escape_string($connection, $_POST['reg_u_mobile']);

      // $reg_pass = password_hash($password, PASSWORD_DEFAULT);

      $select_query = "SELECT * FROM login WHERE u_password = '$reg_pass' AND u_email = '$reg_per_email' AND u_name = '$reg_u_name' AND org_email = '$reg_org_email' AND org_name = '$reg_org_name' AND u_role = '$reg_u_role' AND u_mobile = '$reg_u_mobile'";
      $select_query_result = mysqli_query($connection, $select_query);
      if (mysqli_num_rows($select_query_result) > 0) {
         header('Location: error.php');
      }else{
         $query = "INSERT INTO login (u_email, U_name, u_password, org_email, org_name, u_role, u_mobile)
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

          <!-- <input class="user-input" type="name" name="reg_name" placeholder="Name">
          <input class="user-input" type="email" name="reg_email" placeholder="Personal Email">
          <input class="user-input" type="name" name="reg_org_name" placeholder="Organization Name">
          <input class="user-input" type="email" name="reg_org_email" placeholder="Organization Email">
          <input class="user-input" type="name" name="reg_u_role" placeholder="User Designation/Role">
          <input class="user-input" type="number" name="reg_u_mobile" placeholder="Mobile No">
          <input class="user-input" type="password" name="reg_pass" placeholder="Password">
          <input class="user-input" type="password" name="reg_confirm_pass" placeholder="Confirm Password"> -->