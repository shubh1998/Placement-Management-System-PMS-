<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Upturn Smart Online Exam System" />

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
include("header.php");
include('connect.php');
$cid=$_POST['id'];
$sql="SELECT * from campus_info where c_id='$cid'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)) {
?>

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
      <div class="grid_3 grid_5 ">
      <h3>Company Details</h3>
      <div class="col-md-6 agileits-w3layouts">
      <p><b> <h4>Company Information </h4></b></p>
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
						<!--	<tr>
								<td>Photo</td>
								<td><span class=" "><?php echo($row['file']!=NULL)?'<img src="uploaded/'.$row['file'].'" width="50" height="50">' :'' ;?></span></td>
							</tr> -->
                             <tr>
								<td>Company Name</td>
								<td><span class=""><?php echo $row['company_name'] ?> </span></td>
							</tr>
							<tr>
								<td>Company profile</td>
								<td><span class=""><?php echo $row['company_profile'] ?></span></td>
							</tr>
							<tr>
								<td>Job Profile</td>
								<td><span><?php echo $row['job_profile'] ?></span></td>
							</tr>
                            <tr>
								<td>Job Location</td>
								<td><span class=""><?php echo $row['job_location'] ?></span></td>
							</tr>
							<tr>
								<td>Package</td>
								<td><span><?php echo $row['package'] ?></span></td>
							</tr>
                           
						
                            
							
                             <tr>
								<td>Batch</td>
								<td><span class=""><?php echo $row['batch'] ?></span></td>
							</tr>
                            <tr>
								
								<td>Eligible Branch</td>
								<td><span class=""><?php echo $row['branch'] ?></span></td>
							</tr>
							
						</tbody>
					</table>
                    </div>
                    <div class="col-md-6 agileits-w3layouts">
                    <p><b> <h4>Other Information </h4></b></p>
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
                       	<tr>
                        <tr>
								<td>Campus Date</td>
								<td><span class=""><?php echo $row['date'] ?> </span></td>
							</tr>
							<tr>
								<td>Campus type</td>
								<td><span class=""><?php echo $row['campus_type'] ?></span></td>
							</tr>
                            <tr>
								<td>Venue</td>
								<td><span class=""><?php echo $row['campus_vanue'] ?></span></td>
							</tr>
                            <td>reporting time</td>
								<td><span class=""><?php echo $row['reporting_time'] ?></span>Am</td>
							</tr>
                             <tr>
								<td>X Percent</td>
								<td><span class=""><?php echo $row['eligible_10th'] ?></span></td>
							</tr>
                            <tr>
								
                            <tr>
								<td>XII Percent</td>
								<td><span><?php echo $row['eligible_12th'] ?></span></td>
							</tr>
							<tr>
								<td>UG Percent</td>
								<td><span><?php echo $row['eligible_ug'] ?></td>
							</tr>
							
						</tbody>
					</table>
                    </div>
			<div class="col-md-6 agileits-w3layouts">
			 <div class="clearfix"> </div>
			<div class="list-group list-group-alternate"> 

			</form>
            </div>
			
			</div>
				
            <div class="clearfix"> </div>
			
      </div>			   
</div>
</div>
</div>
<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); ?>
    <?php
}
?>
    
	<?php }
	
 else
 {
	header('location:login.php');
 }
?>
	</div>
</body>
</html>