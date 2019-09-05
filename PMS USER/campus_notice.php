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
		<style>
			ul.pinboards li,
ul.tag-list li {
list-style: none;
}
ul.pinboards li h4 {
margin-top: 20px;
font-size: 18px;
}
ul.pinboards li div p { font-size: 16px; }
ul.pinboards li div {
text-decoration: none;
color: #000;
background: #ffc;
display: block;
height: 140px;
width: 140px;
padding: 1em;
position: relative;
}
ul.pinboards li div small {
position: absolute;
top: 5px;
right: 5px;
font-size: 10px;
}
ul.pinboards li div a {
position: absolute;
right: 10px;
bottom: 10px;
color: inherit;
}
ul.pinboards li {
margin: 10px 40px 50px 0;
float: left;
}
ul.pinboards li div p {
font-size: 12px;
}
ul.pinboards li div {
text-decoration: none;
color: #000;
background: #ffc;
display: block;
height: 140px;
width: 140px;
padding: 1em;
/* Firefox */
-moz-box-shadow: 5px 5px 2px #212121;
/* Safari+Chrome */
-webkit-box-shadow: 5px 5px 2px rgba(33, 33, 33, 0.7);
/* Opera */
box-shadow: 5px 5px 2px rgba(33, 33, 33, 0.7);
}
ul.pinboards li div {
-webkit-transform: rotate(-6deg);
-o-transform: rotate(-6deg);
-moz-transform: rotate(-6deg);
-ms-transform: rotate(-6deg);
}
ul.pinboards li:nth-child(even) div {
-o-transform: rotate(4deg);
-webkit-transform: rotate(4deg);
-moz-transform: rotate(4deg);
-ms-transform: rotate(4deg);
position: relative;
top: 5px;
}
ul.pinboards li:nth-child(3n) div {
-o-transform: rotate(-3deg);
-webkit-transform: rotate(-3deg);
-moz-transform: rotate(-3deg);
-ms-transform: rotate(-3deg);
position: relative;
top: -5px;
}
ul.pinboards li:nth-child(5n) div {
-o-transform: rotate(5deg);
-webkit-transform: rotate(5deg);
-moz-transform: rotate(5deg);
-ms-transform: rotate(5deg);
position: relative;
top: -10px;
}
ul.pinboards li div:hover,
ul.pinboards li div:focus {
-webkit-transform: scale(1.1);
-moz-transform: scale(1.1);
-o-transform: scale(1.1);
-ms-transform: scale(1.1);
position: relative;
z-index: 5;
}
ul.pinboards li div {
text-decoration: none;
color: #000;
background: #ffc;
display: block;
height: 210px;
width: 210px;
padding: 1em;
-moz-box-shadow: 5px 5px 7px #212121;
-webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
-moz-transition: -moz-transform 0.15s linear;
-o-transition: -o-transform 0.15s linear;
-webkit-transition: -webkit-transform 0.15s linear;
}
		</style>
	</head>
	<body>
		
		<?php include('include/headerl.php'); ?>
			  
		<br><br><br><br><br><br>
		<!--Notice Update-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="color:black; text-align: center;">Notice Bord</h1>
				</div>
			</div>
<?php
include("connect.php");
$sql="select * from campus_info  ORDER BY date DESC limit 8";
$result = mysql_query($sql);
?>
			<br><br>
			<div class="row">
				<div class="col-lg-12">
					<?php while($rows=mysql_fetch_array($result))
{
	?>
					<ul class="pinboards">
<li>
<div>
		
	<?php
    $source = $rows['date'];
    $date = new DateTime($source);
?>
<small><?php echo  $date->format('d-m-Y'); ?></small><br>
<h6 style="font-size: 14px;">
						 <form method='post' action='campus_update.php'>
						 <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
						<button  name='view' type='submit' value='view'  >
							All the &nbsp;<?php echo $rows['branch'];?> <?php echo $rows['batch'];?>  passing out batch students are hereby informed that a Close Campus Drive by &nbsp;<?php echo $rows['company_name'];?>&nbsp; is being scheduled on &nbsp;<?php echo $rows['date'];?> at &nbsp;<?php echo $rows['campus_vanue'];?> 
                       
                         	<img src="images/new-gif.gif" height="20" width="40">
                         	 </button>
                             </form>

						 
						</h6>
</div>
</li>


</ul>
<?php }
?>
				</div>
			</div>
			<br><br><br>
			
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