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
include("header.php");

if (isset($_GET['name'])) {
$keyword = ucwords($_GET['name']);	
$sql = "SELECT * FROM studenttbl WHERE fname LIKE '$keyword%' or lname LIKE '$keyword%' or s_roll LIKE '$keyword%' or email LIKE '$keyword%'";
}
 ?>

	
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");

$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Students</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Id</th>
               <th align="left">Enrollment</th>
			   <th align="left">First Name</th>
			   <th align="left">Last Name</th>
               <th align="left">Course.</th>
                <th align="left">Branch</th>
			   <th align="left">Mobile</th>
               <th align="left">Email Id</th>
			   <th align="left">File</th>
                <th align="left">Status</th>
                 <th align="left">&nbsp;</th>
			    
</tr>
</thead>
<tbody>
<?php 
$count=1;
while($rows=mysql_fetch_array($result))
{
	extract($rows);
	?>

    <tr>
    <td height="81"><?php echo $count;?></td>
     <td><?php echo $rows['s_roll'];?></td>
    <td><?php echo $rows['fname'];?></td>
	<td><?php echo $rows['lname'];?> </td>
    <td><?php echo $rows['course'];?></td>
	<td><?php echo $rows['branch'];?></td>
    <td><?php echo $rows['mobile_1'];?></td>
    <td><?php echo $rows['email'];?></td>
    
    
	
	
	<td><?php echo($rows['file']!=NULL)?'<img src="uploaded/'.$rows['file'].'" width="50" height="50">' :'' ;?></td>
	
	
    <?php
	$status=$rows['status'];
$status=$rows['status'];
if(($status)=='0')
{
?>

<form method='post' action='#'>
    <td>   <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn bg-danger" name='active'  type='submit' value='Update'  >U</button>
      </td>  </form>
<?php
}
if(($status)=='1')
{
?>

<form method='post' action='#'>
     <td>  <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn bg-success text-white " name='inactive' type='submit' value='Update'  >P</button>
      </td>  </form>
<?php
}
?>
    </tr>
<?php
$count++;
 }?>
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