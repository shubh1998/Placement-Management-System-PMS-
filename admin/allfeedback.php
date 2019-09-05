<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
include("header.php"); ?>

	
<?php

include("connect.php");
$sql="select * from feedback ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Feedbaks</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Feed.No.</th>
			   <th align="left">Title</th>
			   <th align="left">Description</th>
			   <th align="left">Date (yyyy-mm-dd)</th>
			   <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php
$count=1;
 while($rows=mysql_fetch_assoc($result))
{
	
	extract($rows);
	?>

    <tr>
    <td><?php echo $count;?></td>
	<td><?php echo $rows['subject'];?></td>
    <td><?php echo $rows['description'];?></td>
    <td><?php echo $rows['postdate'];?></td>
	
	<td>
	
    <button class="btn btn-dark text-white "><a href="deletefeedback.php?id=<?php echo $rows['feedid']; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">Delete </a> </button></td>


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