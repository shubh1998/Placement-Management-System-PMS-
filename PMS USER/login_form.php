<?php
session_start();
include("connect.php");
 if(isset($_POST['login'])){
  $result = mysql_query("SELECT * FROM studenttbl WHERE s_roll='" . $_POST["s_roll"] . "' and password = '".($_POST["password"])."' and block='0'");
  $row  = mysql_fetch_array($result);
  $block = $row['stid'];
  if(is_array($row)) {
  $_SESSION["stid"] = $row['stid'];
  $_SESSION["s_roll"] = $row['s_roll'];
  $_SESSION["firstname"] = $row['fname'];
  $_SESSION["lastname"] = $row['lname']; 
  $_SESSION["semail"] = $row['email']; 
  $_SESSION["sfile"] = $row['file']; 
  }
   if($row)
     {
   
       header("Location:index1.php");
      

     }
    
      else
      {
      $error = "Warning! Enrollment no. or Password Invalid."; 
     
       }
  }
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Placement Management System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/linearicons.css">
    <!--=================================================-->  
    <link rel="icon" type="image/png" href="images/icons/569741.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--=================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </head>
  <body>

    <header id="header" id="home">
        <div class="header-top">
          
        <div class="container main-menu">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.php"><img src="img/logo.png" height="35px" width="147px" alt="logo" title="logo" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">                
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="previous_campus.html"> Previous Campus</a></li>
                <li><a href="contact.html">Contact</a></li>
            <li><a href="feedback.html">Feedback</a></li>
            <li><a href="login_form.php">Login</a></li>               
             </ul>
            </nav><!-- #nav-menu-container -->            
          </div>
        </div>
    </div>
    </header><!-- #header -->
    <br><br><br><br> 
        
    
    <!-- End banner Area -->  
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-t-60 p-b-10">
          <form action="#" method="POST" class="login100-form validate-form">
            <span class="login100-form-title p-b-40 ">
              <span class="jump">W</span>
              <span class="jump">E</span>
              <span class="jump">L</span>
              <span class="jump">C</span>
              <span class="jump">O</span>
              <span class="jump">M</span>
              <span class="jump">E</span>
            </span>
            <span class="login100-form-avatar">
              <img src="images/student3.png" alt="AVATAR">
            </span>
                 <?php
                        if (isset($error)){ ?><div class="alert alert-danger">
                      
                       <?php echo $error;?> </div><?php }
                        ?>
            <div class="wrap-input100 validate-input m-t-65 m-b-30" data-validate = "Enter Enrollment Number">
              <input class="input100" type="text" name="s_roll">
              <span class="focus-input100" data-placeholder="Enrollment No."></span>
            </div>

            <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
              <input class="input100" type="password" name="password">
              <span class="focus-input100" data-placeholder="Password"></span>
            </div>

            <div class="container-login100-form-btn">
              <button class="login100-form-btn" type="submit" name="login">
                <a href="#"><span style="color: white;">Login</span></a>
              </button>
            </div>

            <ul class="login-more p-t-50">
              <li class="m-b-5">
                <span class="txt1">
                  Forgot
                </span>
                <a href="forget_form.php" class="txt2">
                  Password?
                </a>
              </li>
              <li>
                <span class="txt1">
                  Don’t have an account?
                </span>
                <a href="register_form.html" class="txt2">
                  Sign up
                </a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
    <div id="dropDownSelect1"></div>
  
    <!--=================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!-- toggle script-->
    <script src="js/superfish.min.js"></script> 
    <script src="js/jquery.magnific-popup.min.js"></script> 
    <script src="js/owl.carousel.min.js"></script>  
    <script src="js/main.js"></script>
  </body>
</html>