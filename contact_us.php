<?php 
require 'db_conn.php';
if (isset($_POST['send_contact'])) {
   if (!$_POST['contact_u_name'] OR !$_POST['contact_u_email'] OR !$_POST['contact_u_subject'] OR !$_POST['contact_u_message']) {
      header('Location: new_error.php');
   }else{
    
      $contact_user_name = mysqli_real_escape_string($connection, $_POST['contact_u_name']);

      $contact_user_email = mysqli_real_escape_string($connection, $_POST['contact_u_email']);

      $contact_user_subject = mysqli_real_escape_string($connection, $_POST['contact_u_subject']);

      $contact_user_message = mysqli_real_escape_string($connection, $_POST['contact_u_message']);

      // $reg_pass = password_hash($password, PASSWORD_DEFAULT);

      $select_query = "SELECT * FROM Contact_us WHERE contact_u_sub='$contact_user_subject'";
      $select_query_result = mysqli_query($connection, $select_query);
      if (mysqli_num_rows($select_query_result) > 0) {
         header('Location: error.php');
      }else{
         $query = "INSERT INTO `Contact_us` (`contact_uname`, `contact_uemail`, `contact_u_sub`, `contact_u_msg`, `contact_u_no`) VALUES ('$contact_user_name', '$contact_user_email', '$contact_user_subject', '$contact_user_message', NULL)";

         $query_result = mysqli_query($connection, $query);
        
         if (!$query_result) {
            die("Query failed ". mysqli_error($connection));
         }else{
            header('Location: index.php');
         }
      }
   }
}
?>

<!-- SELECT * FROM `Contact_us` WHERE 
u_password = '$reg_pass' AND u_email = '$reg_per_email' AND u_name = '$reg_u_name' AND org_email = '$reg_org_email' AND org_name = '$reg_org_name' AND u_role = '$reg_u_role' AND u_mobile = '$reg_u_mobile'
INSERT INTO `Contact_us` (`contact_uname`, `contact_uemail`, `contact_u_sub`, `contact_u_msg`, `contact_u_no`) VALUES ('Hello ', 'hello@dwqud.com', 'wedwedwed', 'wedewdwedwedwed', NULL);-->