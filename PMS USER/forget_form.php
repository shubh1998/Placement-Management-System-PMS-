<?php
  ob_start();
  include("connect.php");
  if(isset($_POST['reset'])){
  $enroll=$_POST['s_roll'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
  $sql = "SELECT * FROM studenttbl WHERE s_roll='$enroll' and email='$email'";
  $result = mysql_query($sql);
    if (mysql_num_rows($result) > 0) 
     {
        $update="update studenttbl SET password='$password' where s_roll='$enroll'";
       $insert=mysql_query( $update);
        $success = "Password Successfully reset."; 
     }else
      {
          $error = "invalid Datails please try again"; 
        }
      } 
     
  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Forget</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===================CSS==============================-->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="https://www.facebook.com/groups/tpobansalindore/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/SDBCT"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/school/s.d.-bansal-college-of-technology-umariya-a.b.road-indore/about/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://www.instagram.com/sd_bansal_college_indore/"><i class="fa fa-instagram"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+91 9898 989 898"><span class="lnr lnr-phone-handset"></span> <span class="text">+91 9898 989 898</span></a>
			  				<a href="mailto:tpobgiindore@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">tpobgiindore@gmail.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png"  height="35px" width="147px" alt="logo" title="logo" /></a>
               </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home</a></li>
			          <li><a href="about.html">About</a></li>
			          <li><a href="previous_campus.html"> Previous Campus</a></li>
			          <li><a href="contact.html">Contact</a></li>
					  <li><a href="feedback.html">Feedback</a></li>
					  <li><a href="login_form.php">Login</a></li>
			         
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		</header><!-- #header -->
			  
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Forget Password				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="forget_form.php"> Forget password</a></p>
						</div>	
					</div>
				</div>
		</section>
		<!-- End banner Area -->

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-85 p-b-20">
					<form action="#" method="POST" class="login100-form validate-form">
						<span class="login100-form-title p-b-70">
							<span class="jump red">Forget</span> 
							<span class="jump red">Password</span>
							<span class="jump red">?</span>
						</span>
						<span class="login100-form-avatar">
							<img src="images/student2.png" alt="AVATAR">
						</span><br>
						 <?php
                        if (isset($success)){ ?><div class="alert alert-success">
                      
                       <?php echo $success;?> </div><?php }
                        ?>
                         <?php
                        if (isset($error)){ ?><div class="alert alert-danger">
                      
                       <?php echo $error;?> </div><?php }
                        ?>
                        <div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Enrollment No">
							<input class="input100" type="text" name="s_roll">
							<span class="focus-input100" data-placeholder="Enrollment No"></span>
						</div>

						<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter email">
							<input class="input100" type="email" name="email">
							<span class="focus-input100" data-placeholder="Email"></span>
						</div>
						<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "New Password">
							<input class="input100" type="password" name="pass">
							<span class="focus-input100" data-placeholder="New Password"></span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" name="reset">
								<a href="#"><span style="color: white;">Reset password</span></a>
							</button>
						</div>
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
		<script src="js/main.js"></script>
		<!-- toggle script-->
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>	
	</body>
</html>