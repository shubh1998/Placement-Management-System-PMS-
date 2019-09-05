
<?php 
     include("connect.php");
  if(isset($_POST['submit'])){
	 $subject=$_POST['subject'];    
	 $feedback=$_POST['feedback']; 
   $date=date("y/m/d");
   
	$insert=mysql_query("INSERT into  feedback SET  subject='$subject',description='$feedback',postdate='$date'"); 
  if($insert)
     {
    $msg = "Feedback Successfully Submitted"; 
      }
      else
      {
      echo mysql_error();
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
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!--=================================================-->
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
		<!--text animation file-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	</head>
	<body>

		  <?php include('include/headerl.php'); ?>
		
		
		<div class="limiter">
			<div class="container-login100">
				
				<div class="wrap-login100 p-t-85 p-b-20">
					<form action="#" method="POST" class="login100-form validate-form">
						<span class="login100-form-title p-b-20">
							<h1 class="animated infinite jello delay-.30s font1">Feedback</h1> 
							<h1 class="animated infinite rubberBand delay-35s font1">Form</h1>
						</span>
						<span class="login100-form-avatar">
							<img src="images/feedback.jpg" alt="AVATAR">
						</span>

						<!--email-->
						
						<!--Enrollment no-->
						<?php
                        if (isset($msg)){ ?><div class="alert alert-success">
                      <strong></strong>Feedback Successfully Submitted Thank You.
                      </div> <?php }
                        ?>
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter Subject">
							<input class="input100" type="text" name="subject">
							<span class="focus-input100" data-placeholder="Feedback title"></span>
						</div>

						<!--feedback-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter feedback">
							<textarea class="input100" type="text" name="feedback"></textarea>
							<span class="focus-input100" data-placeholder="Feedback"></span>
						</div>

						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" name="submit">
								<a href="#"><span style="color: white;">Send password</span></a>
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