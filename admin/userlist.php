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
 include("connect.php");
include("header.php"); ?>

	
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="select uid,fname,lname,gender,mobile,dob,address,deptname,catname,file,status from usertbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables"><ol class="breadcrumb">
	             <li class="breadcrumb-item text-white" ><h4 ><a href = "adduser.php" " class=" btn btn-primary hvr-icon-float-away col-9">Add User </a></h4></li>
               
            </ol>
<div class="w3l-table-info">
<h2>List of Users</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Id</th>
			   <th align="left">First Name</th>
			   <th align="left">Last Name</th>
			   <!--<th align="left">Gender</th>
			   <th align="left">Blood Group</th>
			   <th align="left">Email</th>-->
			   <th align="left">Mobile</th>
			   <!--<th align="left">Date of birth</th>
			   <th align="left">Address</th>-->
			   <th align="left">Department</th>
               <th align="left">&nbsp;</th>
			   <th align="left">File</th>
               <th align="left">&nbsp;</th>
               <th align="left">Status</th>
               <th align="left">&nbsp;</th>
			   <th align="left">Action</th>
               <th align="left">&nbsp;</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_array($result))
{
	extract($rows);
	?>

    <tr>
    <td><?php echo $rows['uid'];?></td>
	<td><?php echo $rows['fname'];?></td>
    <td><?php echo $rows['lname'];?></td>
	<!--<td><?php //echo $rows['gender'];?></td>
	<<td><?php// echo $rows['blood'];?></td>
	<td><?php //echo $rows['email'];?></td>-->
	<td><?php echo $rows['mobile'];?></td>
	<!--<td><?php// echo $rows['dob'];?></td>
	<td><?php// echo $rows['address'];?></td>-->
	<td><?php echo $rows['deptname'];?></td>
	<td><?php echo $rows['catname'];?></td>
	<td><?php echo($rows['file']!=NULL)?'<img src="uploaded/'.$rows['file'].'" width="50" height="50">' :'' ;?></td>
	<td>
    <?php
$status=$rows['status'];
if(($status)=='0')
{
?>
<td>
<form method='post' action='activeuser.php'>
       <input  type='hidden' value="<?php echo $rows['uid']; ?>" name='id'>
        <button class="btn bg-danger" name='active'  type='submit' value='Update'  >Inactivate</button>
        </form></td>
<?php
}
if(($status)=='1')
{
?>
<td><form method='post' action='activeuser.php'>
       <input  type='hidden' value="<?php echo $rows['uid']; ?>" name='id'>
        <button class="btn bg-success text-white " name='inactive' type='submit' value='Update'  >Activate</button>
        </form></td>
<?php
}
?>
<td><form method='post' action='edituser.php'>
       <input  type='hidden' value="<?php echo $rows['uid']; ?>" name='id'>
        <button class="btn bg-alert dark text-white " name='updateu' type='submit' value='Update'  ><i class="far fa-edit" style="font-size:20px;color: green;"></i></button>
        </form></td>
<td><form method='post' action='activeuser.php'>
       <input  type='hidden' value="<?php echo $rows['uid']; ?>" name='id'>
        <button class="btn btn-dark text-white " name='delete' type='submit' value='Update'  ><i class="fas fa-trash-alt" style="font-size:20px;color: red;"></i></button>
        </form></td>
	
 
    </tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

	
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
<?php

mysql_close($con);
?>
