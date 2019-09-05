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
$student=$_POST['id'];
$sql="SELECT * from studenttbl where s_roll='$student'";
$result=mysql_query($sql);
while($row = mysql_fetch_array($result)) {
?>

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
      <div class="grid_3 grid_5 ">
      <h3> Student Information</h3>
      <div class="col-md-6 agileits-w3layouts">
      <p><b> <h4>Basic Information </h4></b></p>
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Photo</td>
								<td><span class=" "><?php echo($row['file']!=NULL)?'<img src="uploaded/'.$row['file'].'" width="50" height="50">' :'' ;?></span></td>
							</tr>
                            <tr>
								<td>Enroll. Number</td>
								<td><span class=""><?php echo $row['s_roll'] ?> </span></td>
							</tr>
							<tr>
								<td>First Name</td>
								<td><span class=""><?php echo $row['fname'] ?> </span></td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td><span class=""><?php echo $row['lname'] ?></span></td>
							</tr>
                            <tr>
								<td>Email</td>
								<td><span class=""><?php echo $row['email'] ?></span></td>
							</tr>
                            <tr>
								<td>Mobile</td>
								<td><span class=""><?php echo $row['mobile_1'] ?></span></td>
							</tr>
                            <tr>
								<td>DOB</td>
								<td><span class=""><?php echo $row['dob'] ?></span></td>
							</tr>
                             <tr>
								<td>Address</td>
								<td><span class=""><?php echo $row['address1'] ?></span></td>
							</tr>
							
						</tbody>
					</table>
                    </div>
                    <div class="col-md-6 agileits-w3layouts">
                    <p><b> <h4>Acadmic Information </h4></b></p>
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>X Percent</td>
								<td><span class=""><?php echo $row['10th'] ?></span></td>
							</tr>
							<tr>
								<td>XII Percent</td>
								<td><span><?php echo $row['12th'] ?></span></td>
							</tr>
							<tr>
								<td>UG Percent</td>
								<td><span><?php echo $row['ug'] ?></td>
							</tr>
							<tr>
                            <tr>
								<td>Course</td>
								<td><span class=""><?php echo $row['course'] ?></span></td>
							<tr>
								<td>Branch</td>
								<td><span class=""><?php echo $row['branch'] ?></span></td>
							</tr>
			
                            <tr>
								<td>College</td>
								<td><span class=""><?php echo $row['college'] ?></span></td>
							</tr>
                            <tr>
								<td>Passing Year</td>
								<td><span class=""><?php echo $row['pyear'] ?>
							</tr>
                            <?php
if($row['status']=='1')
{
?>
                            <tr>
								<td>Plecement Status:</td>
								<td><span style="color:green"><?php echo "placed" ?></td>
							</tr>
                            
							 <?php
}
else
{
?> 
                            <tr>
								<td>Plecement Status:</td>
								<td><span style="color:red"><?php echo "unplaced" ?></td>
							</tr>
                            <?php
}
?>
							
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
<!--popup script start -->
<!--popup script end -->
</html>