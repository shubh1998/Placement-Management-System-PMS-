<?php 
     include("connect.php");
  if(isset($_POST['submit'])){
	 echo $Firstname=$_POST['Firstname'];    
	 echo $Lastname=$_POST['Lastname']; 
	 echo $Email=$_POST['Email']; 
	 echo $DOB=$_POST['DOB'];   
	 echo $Rollno=$_POST['Rollno']; 
	 echo $UG_percentage=$_POST['UG_percentage'];    
	echo  $XII_percentage=$_POST['12th_percentage']; 
	echo  $X_percentage=$_POST['10th_percentage'];       
	echo  $Pyear=$_POST['Pyear'];
	echo  $Branch=$_POST['Branch'];    
	echo  $College=$_POST['College'];
	echo  $Course=$_POST['Course'];    
	echo  $Backlog=$_POST['Backlog']; 
	echo  $Mobile=$_POST['Mobile']; 
	echo  $Gender=$_POST['Gender']; 
	echo  $Address=$_POST['Address'];  
	 $date=date("d/m/y");
  echo $date;  
	$insert=mysql_query("UPDATE studenttbl SET   s_roll='$Rollno',fname='$Firstname',lname='$Lastname',10th='$X_percentage',12th='$XII_percentage',ug='$UG_percentage',pyear='$Pyear',branch='$Branch',college='$College',course='$Course',backlog='$Backlog',mobile_1='$Mobile',gender='$Gender',address1='$Address',dob='$DOB',rdate='$date' where s_roll='$Rollno'"); 
	
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
		<!--=================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--text animation file-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	</head>
	<body>
		<?php include('include/headerl.php'); ?>
		<!-- #header -->
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Register Here...				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="register_form.html"> Register</a></p>
						</div>	
					</div>
				</div>
		</section>
		<!-- End banner Area -->	

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-20 p-b-2">
					<form action="#" method="POST" class="login100-form validate-form">
						<span class="login100-form-title p-b-50">
							<h1 class="animated slideInLeft delay-.7s font">Student Registration</h1> 
							<h1 class="animated slideInUp delay-.15s font">Form</h1>
						</span>
						<span class="login100-form-avatar">
							<?php $avatar=$_SESSION["ufile"]; ?> 
							<img src="uploaded/<?php echo  $avatar; ?>" alt="AVATAR"> 
						</span><br>
						<?php
                        if (isset($msg)){ ?><div class="alert alert-success">
                      <strong></strong>Information Successfully Updated.
                      </div> <?php }
                        ?>
                      <?php 

 

  include("connect.php");
 
  $sid=$_SESSION["s_roll"];
  $getselect=mysql_query("SELECT * from studenttbl  WHERE s_roll='$sid'");
 
  while($user = mysql_fetch_array($getselect))
  {
	$sid=$user['s_roll'];
	$fname=$user['fname'];
    $lname=$user['lname'];
	$gender=$user['gender'];
	$x=$user['10th'];
	$xii=$user['12th'];
	$ug=$user['ug'];
	$pyear=$user['pyear'];
	$branch=$user['branch']; 
	$course=$user['course'];
	$college=$user['college'];
	$backlog=$user['backlog'];
	$email=$user['email']; 
	$mobile_1=$user['mobile_1'];
	$address1=$user['address1']; 
	$dob=$user['dob'];
	
?>
						<!--First Name-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter FirstName">
							<input class="input100" type="text" value="<?php echo $fname; ?>" name="Firstname" readonly>
							<span class="focus-input100" data-placeholder="Firstname"></span>
						</div>

						<!--Last Name-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter LastName">
							<input class="input100" type="text" value="<?php echo $lname; ?>" name="Lastname" readonly>
							<span class="focus-input100" data-placeholder="Lastname"></span>
						</div>

						<!--email-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter email">
							<input class="input100" type="email" value="<?php echo $email; ?>" name="Email" readonly>
							<span class="focus-input100" data-placeholder="email"></span>
						</div>

						<!--Enrollment no-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter Enrollment">
							<input class="input100" type="text" value="<?php echo $sid; ?>" name="Rollno" readonly>
							<span class="focus-input100" data-placeholder="Enrollment No."></span>
						</div>
                         
                         <!--DOB-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter DOB">
							<input class="input100" type="date" value="<?php echo $dob; ?>" name="DOB">
							<span class="focus-input100" data-placeholder="DOB"></span>
						</div>

                        <!--gender-->
						<div class="validate-input m-b-50" data-validate="Enter gender">
							<select class="input100 validate-input m-b-50" name="Gender">
								  	<option value="">Select Gender</option>
								  	<option value="Male"<?php if($gender == 'Male') { ?> selected="selected"<?php } ?>>Male</option>
								  	<option value="Female"<?php if($gender == 'Female') { ?> selected="selected"<?php } ?>>Female</option>
								  	<option value="Others"<?php if($gender == 'Others') { ?> selected="selected"<?php } ?>>Others</option>
							</select>
						</div>

						<!--UG(%)-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter UG">
							<input class="input100" min="0" max="100" type="number" value="<?php echo $ug; ?>" name="UG_percentage">
							<span class="focus-input100" data-placeholder="UG(%)"></span>
						</div>

						<!--HSC(12th)-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter HSC">
							<input class="input100" min="0" max="100" type="number" value="<?php echo $xii; ?>" name="12th_percentage">
							<span class="focus-input100" data-placeholder="12th(%)"></span>
						</div>

						<!--SSC(10th)-->
						<div class="wrap-input100 validate-input m-t-50 m-b-50" data-validate = "Enter SSC">
							<input class="input100" min="0" max="100" type="number" value="<?php echo $x; ?>" name="10th_percentage">
							<span class="focus-input100" data-placeholder="10th(%)"></span>
						</div>

						<!--year-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter Passing year">
							<input class="input100"  type="number" min="2000" max="2030" step="1" value="2016" value="<?php echo $pyear; ?>" name="Pyear">
							<span class="focus-input100" data-placeholder="Passing year"></span>
						</div>

						<!--Branch-->
						<div class="validate-input m-b-50" data-validate = "Enter Branch_name">
							<select class="input100 validate-input m-b-50" name="Branch">
								<option value="">Select Branch</option>
								  <option value="CS"<?php if($branch == 'CS') { ?> selected="selected"<?php } ?>>CS</option>
								  <option value="IT"<?php if($branch == 'IT') { ?> selected="selected"<?php } ?>>IT</option>
								  <option value="ME"<?php if($branch == 'ME') { ?> selected="selected"<?php } ?>>ME</option>
								  <option value="CIVIL"<?php if($branch == 'CIVIL') { ?> selected="selected"<?php } ?>>CIVIL</option>
								  <option value="EC"<?php if($branch == 'EC') { ?> selected="selected"<?php } ?>>EC</option>
							</select>
						</div>
						
						<!--College-->
						<div class="validate-input m-b-50" data-validate = "Enter College_name">
							<select class="input100 validate-input m-b-50" name="College">
								  	<option value="">Select College</option>
								  <option value="SDBCT"<?php if($college == 'SDBCT') { ?> selected="selected"<?php } ?>>SDBCT</option>
								  <option value="SDBCE"<?php if($college == 'SDBCE') { ?> selected="selected"<?php } ?>>SDBCE</option>
							</select>
						</div>
						
                        <!--Course-->
                        <div class="validate-input m-b-50" data-validate = "Enter College_name">
							<select class="input100 validate-input m-b-50" name="Course">
								  	<option value="">Select Course</option>
								  	<option value="BE">B.E.</option>
	  								 <option value="BE"<?php if($course == 'BE') { ?> selected="selected"<?php } ?>>B.E.</option>
							</select>
						</div>
						
						<!--Backlog-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter Backlog">
							<input class="input100" type="number" value="<?php echo $backlog; ?>" name="Backlog">
							<span class="focus-input100" data-placeholder="No. Of Active Backlog"></span>
						</div>

						<!--contact 1-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "Enter Contact No.">
							<input class="input100" type="tel" minlength="10" maxlength="10" value="<?php echo $mobile_1; ?>" name="Mobile" title="10 digit mobile number" required>
							<span class="focus-input100" data-placeholder="Contact No."></span>
						</div>

						
						<!--Address-->
						<div class="wrap-input100 validate-input m-b-50" data-validate = "EnterComplete Address">
							<input class="input100" type="text" name="Address" value="<?php echo $address1; ?>" required>
							<span class="focus-input100" data-placeholder="Address"></span>
						</div>
						<!--Agree-->
						<div class=" validate-input   m-b-50" data-validate = "EnterComplete Address">
							<input   	type="checkbox" name="Agree" required>  I filled all the information Currectly.
							
						</div>

						<div class="container-login100-form-btn" >
							<button type="submit" name="submit" class="login100-form-btn">
								<a href="#"><span style="color: white;">Register</span></a>
							</button>
						</div>
                     <?php } ?>
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