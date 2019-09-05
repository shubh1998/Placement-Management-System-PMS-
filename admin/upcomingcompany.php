<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System</title>
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

include("header.php"); ?>

	<ol class="breadcrumb">
                <center><li class="breadcrumb-item">
                  <h4><a href="">Upcoming Companys List</a></h4></li></center>
</ol>
<!--grid 
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
	
<?php

include("connect.php");
$sql="SELECT * from campus_info WHERE date>CURDATE() ORDER BY date ASC";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>Upcoming:</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Id</th>
			   <th align="left">Company Name</th>
               <th align="left">Date(yy-mm-dd)</th>
               <th align="left">Vanue</th>
               <th align="left">Website</th>
                <th align="left">Batch</th>
                <th align="left">Packege</th>
                 <th align="left">Status;</th>
                <th align="left">edit</th>
                 <th align="left">delete</th>
			    
</tr>
</thead>
<tbody>
<?php 
$count=1;
while($rows=mysql_fetch_array($result))
{
	?>

    <tr>
      <td><?php echo $count;?></td>
    <td><?php echo $rows['company_name'];?></td>
      <td><?php echo $rows['date'];?></td>
	<td><?php echo $rows['campus_vanue'];?></td>
    <td><?php echo $rows['website'];?></td>
    <td><?php echo $rows['batch'];?></td>
    <td><?php echo $rows['package'];?></td>
    
     <?php
	$status=$rows['status'];
$status=$rows['status'];
if(($status)=='0')
{
?>

<form method='post' action='activecampus.php'>
    <td>   <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
        <button class="btn bg-danger" name='active'  type='submit' value='Update'  >InActive</button>
      </td>  </form>
<?php
}
if(($status)=='1')
{
?>

<form method='post' action='activecampus.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
        <button class="btn bg-success text-white " name='inactive' type='submit' value='Update'  >Active</button>
      </td>  </form>
<?php
}
?>
	
 <form method='post' action='editupcomingcompany.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
        <button class="btn bg-alert dark text-white " name='updatecomp' type='submit' value='Update'  ><i class="far fa-edit" style="font-size:20px;color: green;"></i></button>
       </td> </form>
       <form method='post' action='activecampus.php'>
  <td>     <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
        <button class="btn btn-dark text-white " name='delete' type='submit' value='Update'  ><i class="fas fa-trash-alt" style="font-size:20px;color: red;"></i></button>
      </td>  </form>
    </tr>
<?php
$count++;
 }?>
</tbody>
</table>
</div>
</div>
</div>

<!--<button><a href="logout.php">Logout</a></button>-->

<!--
 </div>

</div>
 	<!--//grid-->
	
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
