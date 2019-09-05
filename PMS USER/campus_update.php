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
		<!--=================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		
		<?php include('include/headerl.php'); ?>
			  
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Campus Update				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="campus_update.html"> CAMPUS UPDATE</a></p>
						</div>	
					</div>
				</div>
		</section>
		<!-- End banner Area -->	
		<br><br>
		<!--Notice Update-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="color:black; text-align: center;">Organization name</h1>
				</div>
			</div>
			<?php

include("connect.php");
$id=$_POST['id'];
$sql="select * from campus_info where c_id='$id' ";
$result = mysql_query($sql);
?><?php while($rows=mysql_fetch_array($result))
{
	extract($rows)
	?>
			<br><br>
			<div class="row" style="border:dashed; background-color: #f6d3d3;">
				
				<div class="col-lg-12">
					<p><br>
						Dear Students,        
						<br><br>
						All the &nbsp;<?php echo $rows['branch'];?> <?php echo $rows['batch'];?>  passing out batch students are hereby informed that a Close Campus Drive by &nbsp;<?php echo $rows['company_name'];?>&nbsp; is being scheduled on &nbsp;<?php echo $rows['date'];?> at &nbsp;<?php echo $rows['campus_vanue'];?>.
						<br><br>
						
						Batch: <?php echo $rows['batch'];?> passing out batch
						<br><br>
						<p>
	<strong>
		 company Name:
	</strong>
	 &nbsp;<?php echo $rows['company_name'];?>
</p>
						
						Branch: <?php echo $rows['branch'];?>
						<br><br>

						Reporting Venue – &nbsp;<?php echo $rows['campus_vanue'];?>
						<br><br>

						Reporting Time -&nbsp;<?php echo $rows['reporting_time'];?>. AM&nbsp;
						<br><br>

						About Company:
						<br>
                           <?php echo $rows['company_profile'];?>. &nbsp;
						<br><br>
		                 Desired skills:
                         &nbsp;<?php echo $rows['require_skill'];?>. &nbsp;
				        <br><br>

						Job profile – &nbsp;<?php echo $rows['job_profile'];?>.
						<br><br>
                        Salary Range:
                          <br>
                         <?php echo $rows['package'];?>. <strong>LPA</strong>
                         <br><br>
						Eligibility Criteria - 
						<br>

						X: <?php echo $rows['eligible_10th'];?>&nbsp;% throughout<br>
						Xii: <?php echo $rows['eligible_12th'];?>&nbsp;% throughout<br>
						UG: <?php echo $rows['eligible_ug'];?>&nbsp;% throughout
						<br><br>
		               registration link:
		               <br>
	                   &nbsp;<a href="<?php echo $rows['registration_link'];?>" style="color: blue" target="_blank"><?php echo $rows['registration_link'];?></a>
    
                        <br><br>
                        Selection Process:
                        <br>
                        <p><?php echo $rows['selection_process'];?><strong></strong></p>
                        <br><br>
                        Note:
                         <br>
						<mark style="background-color:yellow;"><?php echo $rows['other_detail'];?></mark>
						<br>

						
						<br>
						
						<br>
						Mohammad Alam<br>
						Training & Placement Officer<br>
						Bansal Group of Institutes<br>
						[SD Bansal College of Technology]<br>
						[SD Bansal College of Engineering]<br>
						Off. NH-3 Express Way<br>
						Umeria Indore Mhow Road<br>
						Indore<br>
						Handphone 1: +91 9303472164<br>
						Alt. E-Mail: tposdbansal@gmail.com 

					</p>
				</div>
			</div>
			<br><br><br>
			<?php }
?>
		</div>

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