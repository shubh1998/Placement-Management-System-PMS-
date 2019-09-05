<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="pns" />

</head> 


<body>

<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="mother-grid-inner">

<?php 
session_start();
if($_SESSION["userid"]==true)

{
include("connect.php");
include("fetch_records.php")
?>
<?php include("header.php"); ?>


	
			
			<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>TOTAL STUDENTS</h3>
								<h4> <?php echo number_format($allstudents); ?>  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-check" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>NO. OF PLACEMENT</h3>
								<h4><?php echo number_format($total_placement); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-star" aria-hidden="true"></i>
							</div>
							<div class="four-text">
                                <h3>PLACED STUDENT</h3>
								<h4><?php echo number_format($pstudents); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
                           
								<i class="glyphicon glyphicon-star-empty" aria-hidden="true"></i>
							</div>
							<div class="four-text">
                            <h3>UNPLACED STUDENT</h3>
								<h4><?php echo number_format($ustudents); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
	
	<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
                                
								<i class="glyphicon glyphicon-calendar" aria-hidden="true"></i>
							</div>
							<div class="four-text">
                            <h3>HELD CAMPUS</h3>
								<h4><?php echo number_format($total_campus); ?></h4>
								
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-hourglass	" aria-hidden="true"></i>
							</div>
							<div class="four-text">
                            <h3>UPCOMING CAMPUS</h3>
								<h4><?php echo number_format($up_campus); ?>  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>FEEDBACK</h3>
								<h4><?php echo number_format($feedback); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-remove-circle" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>DEBARRED STUDENTS</h3>
								<h4><?php echo number_format($debarred_students); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
	

<?php include("footer.php"); ?>
</div></div>
        
	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
	</div>
</body>
</html>