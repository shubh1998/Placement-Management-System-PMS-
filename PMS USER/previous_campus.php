<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="shubhamgupta98">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Placement Management System</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->	
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/nice-select.css">				
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">			
		<link rel="stylesheet" href="css/jquery-ui.css">			
		<link rel="stylesheet" href="css/main.css">
		<style>
form:hover, form:focus {
  color: #2a6496;
  text-decoration: none;
}
.square-service-block{
	position:relative;
	overflow:hidden;
	margin:15px auto;
	}
.square-service-block form {
  background-color: #e74c3c;
  border-radius: 5px;
  display: block;
  padding: 60px 20px;
  text-align: center;
  width: 100%;
}
.square-service-block a:hover{
  background-color: rgba(231, 76, 60, 0.8);
  border-radius: 5px;
}

.ssb-icon {
  color: #fff;
  display: inline-block;
  font-size: 28px;
  margin: 0 0 20px;
}

h2.ssb-title {
  color: #fff;
  font-size: 25px;
  font-weight: 200;
  margin:0;
  padding:0;
  text-transform: uppercase;
}
h3.ssb-title {
  color: #fff;
  font-size: 20px;
  font-weight: 200;
  margin:0;
  padding:0;
  text-transform: uppercase;
}

		</style>
		<!-- js/jquery file -->
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
	</head>
	<body>	
		<?php include('include/headerl.php'); ?>
	
<?php
include("connect.php");
$sql="select * from campus_info WHERE date<=CURDATE() ORDER BY date DESC";
$result = mysql_query($sql);
$number=mysql_num_rows($result);
?>
<section class="popular-course-area section-gap">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10"><?php echo $number; ?> Campuses Held</h1>
							<p>till fabruary 2019.</p>
						</div>
					</div>
				</div>
<div class="container">
       <div class="row">
       	<?php while($rows=mysql_fetch_array($result))
{    
	?>	
	<?php
    $source = $rows['date'];
    $date = new DateTime($source);
?>
          <div class="col-md-3">
            <div class="square-service-block">
               
                <form method='post' action='campus_update.php'>
                <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
				  <button  name='view' type='submit' value='view'  >
                
                 <h2 class="ssb-title"><?php echo $rows['company_name'];?></h2>  
                 <h3 class="ssb-title">Date:<?php echo  $date->format('d-m-Y'); ?></h3>
                 <h3 class="ssb-title">Batch:<?php echo $rows['batch'];?></h3>
                 <h3 class="ssb-title"><?php echo $rows['branch'];?></h3>   
                 
				  
					<img src="images/star.png" height="60" width="180"> </button>
                    
                    </div>
                 </div>
                 </form>
        <?php 
         }
    ?>  
       </div>
    </div>
</div>
</section>

		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Top Companies</h4>
								<ul>
									<li><a href="#">BYJU'S</a></li>
									<li><a href="#">TEKLINK</a></li>
									<li><a href="#">TCS</a></li>
									<li><a href="#">ZENSAR</a></li>
									<li><a href="#">JUSTDIAL</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Departments</h4>
								<ul>
									<li><a href="#">Computer Science & Engineering</a></li>
									<li><a href="#">Information Technology</a></li>
									<li><a href="#">Electronics & Comm. Engineering</a></li>
									<li><a href="#">Civil Engineering</a></li>
									<li><a href="#">Master of Business Administration</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="footer-bottom row align-items-center justify-content-between">
								<p class="footer-text m-0 col-lg-6 col-md-12">Copyright &copy; All rights reserved by<a href="http://shubhamgupta98.me" target="_blank"> Shubham Gupta</a></p>
								<div class="col-lg-6 col-sm-12 footer-social">
									<a href="https://www.facebook.com/groups/tpobansalindore/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/SDBCT"><i class="fa fa-twitter"><i class="fa fa-twitter"></i></a>
									<a href="https://www.linkedin.com/school/s.d.-bansal-college-of-technology-umariya-a.b.road-indore/about/"><i class="fa fa-linkedin"></i></a>
									<a href="https://www.instagram.com/sd_bansal_college_indore/"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>											
					</div>				
				</div>
		</footer>	
		<!-- End footer Area -->	

		<script type="text/javascript">
			$document.ready(function(){
				$('.col-lg-4').hover(){
					//trigger when mouse hover
					function(){
						$this.animate({
							marginTop: "-1%";
						},200)
					},
					//trigger when mouse out
					function(){
						$this.animate({
							marginTop: "0%";
						},200);
					}
				}
			})
		</script>

		<!--=================================================-->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
  		<script src="js/easing.min.js"></script>			
		<script src="js/hoverIntent.js"></script>
		<script src="js/superfish.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
    	<script src="js/jquery.tabs.min.js"></script>				
    	<script src="js/jquery.nice-select.min.js"></script>	
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/mail-script.js"></script>	
		<script src="js/main.js"></script>	
	</body>
</html>