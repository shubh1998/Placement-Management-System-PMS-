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

	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Companies List</a></h4></li></center>
            </ol>
<!--grid 
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
	
<?php

include("connect.php");
$sql="select * from campus_info WHERE date<=CURDATE() ORDER BY date DESC";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>Companies List</h2>
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
            
                <th align="left">&nbsp;</th>
			   <th align="left">Edit</th>
                <th align="left">Delete</th>
			    
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
	 <td align="left">&nbsp;</td>
 <form method='post' action='pastcompanyinfo.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['c_id']; ?>" name='id'>
        <button class="btn btn-info dark text-white " name='active' type='submit' value='Update'  ><i class="fa fa-info-circle" style="font-size:20px;color: white;"></i></button>
       </td> </form>
       <form method='post' action='#'>
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
