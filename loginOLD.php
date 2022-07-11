<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets_panatab/css/login.css" />
    <link href="assets_panatab/img/shanyraq.png" rel="icon">
    <title>Login</title>
  </head>
  <body>


    <div class="container" id="container">
      <div class="form-container sign-up-container">

          <form name="frm1" class="login-form" action="app/register.php" method="POST" autocomplete="off" onsubmit="return checkall();">
            <?php require 'constants/check_reply.php'; ?>
          <h1>Create Account</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your email for registration</span>
          <span id="name_status"></span>
           <span id="email_status"></span>
          <input type="text" id="UserName" class="form-control" name="user_name" required placeholder="Username" onkeyup="checkname();">
          <input type="email" id="UserEmail" class="form-control" name="user_email" required placeholder="Email Address" onkeyup="checkemail();">
          <input type="password" name="password" required class="form-control" placeholder="Password">
          <input type="password" name="confirmpassword" required class="form-control" placeholder="Retype Password">

          <input id="btnSubmit" type="submit"  onclick="return val_a();" value="Register" class="btn btn-common log-btn">

        </form>
      </div>
      <div class="form-container sign-in-container">
          <form  class="login-form" action="app/login.php" method="POST" autocomplete="off">
  <?php require 'constants/check_reply.php'; ?>
          <a href = "dashboard.html"><img src="assets_panatab/img/shanyraq.png" alt="" width = "50"></a>

          <h1>Sign in</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span>
          <input type="text" id="UserEmail" class="form-control" name="user_email" required placeholder="Email Address">
          <input type="password" name="password" required class="form-control" placeholder="Password">
          I am no robot:<input type="checkbox" class="custom-control-input" required name="check" id="checkedall">
          <a class="forgetpassword" href="forgot-password">Forgot Password?</a>
          <div class="text-center">
          <input id="btnSubmit" type="submit" value="Login" class="btn btn-common log-btn">
          </div>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>To keep connected with us please login with your personal info</p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Salem!</h1>
            <p>Welcome to the future of co-living! <br>Let's find korshi for you! <br>New to PanaTAB? </p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>


    <script src="assets_panatab/js/login.js"></script>
    <script type="text/javascript">

    function checkname()
    {
     var name=document.getElementById( "UserName" ).value;

if(name)
     {
      $.ajax({
      type: 'post',
      url: 'constants/check-data.php',
      data: {
       user_name:name,
      },
      success: function (response) {
       $( '#name_status' ).html(response);
       if(response == '<div class="alert alert-warning">Username is already registered</div>')
       {


        return false;
       }
       else
       {

        return true;
       }
      }
      });
     }
     else
     {

     }
    }

    function checkemail()
    {
     var email=document.getElementById( "UserEmail" ).value;

     if(email)
     {
      $.ajax({
      type: 'post',
      url: 'constants/check-data.php',
      data: {
       user_email:email,
      },
      success: function (response) {
       $( '#email_status' ).html(response);
       if(response == '<div class="alert alert-warning">Email is already registered</div>')
       {



        return false;

       }
       else
       {



        return true;


       }
      }
      });
     }
     else
     {

     }
    }


    function checkall() {


    var titleElement = document.getElementById("UserName");

        if(titleElement.innerHTML.length>3){
            return false;
        }


    }


    </script>
  </body>
</html>