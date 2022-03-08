<?php 
require 'login.php';
require 'registration.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"> 
    <title>Responsive Login Page</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="brand_new_style.css">
  </head>
  <body class="body">
  <div class="content" >
  <!--form area start-->
    <div class="form" >
        <!--login form start-->
        <form class="login-form" action="" method="post">
          <i class="fas fa-user-circle"></i>
          
          <input class="user-input" type="email" name="log_email" placeholder="Personal Email">
          <input class="user-input" type="password" name="log_pass" placeholder="Password">
         
          <div class="options-01">
            <label class="remember-me"><input type="checkbox" name="">Remember me</label>
            <a href="#">Forgot your password?</a>
          </div>
          <input class="btn" type="submit" name="login" value="LOGIN">
          <div class="options-02">
            <p>Not Registered? <a href="#">Create an Account</a></p>
          </div>
        </form>
        <!--login form end-->
        <!--signup form start-->
        <form class="signup-form" action="" method="post">
          <i class="fas fa-user-plus"></i>

          <input class="user-input" type="name" name="reg_name" placeholder="Name">
          <input class="user-input" type="email" name="reg_email" placeholder="Personal Email">
          <input class="user-input" type="name" name="reg_org_name" placeholder="Organization Name">
          <input class="user-input" type="email" name="reg_org_email" placeholder="Organization Email">
          <input class="user-input" type="name" name="reg_u_role" placeholder="User Designation/Role">
          <input class="user-input" type="number" name="reg_u_mobile" placeholder="Mobile No">
          <input class="user-input" type="password" name="reg_pass" placeholder="Password">
          <input class="user-input" type="password" name="reg_confirm_pass" placeholder="Confirm Password">

          <input class="btn" type="submit" name="reg" value="SIGN UP">
          <div class="options-02">
            <p>Already Registered? <a href="#">Sign In</a></p>
          </div>
        </form>
        <!--signup form end-->
      </div>
      <!--form area end-->
  </div>
    
  <script src="new_script.js"></script>
  </body>
</html>
                           