
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
 $sql="select * from studenttbl where verified=0";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">

<div class="w3l-table-info">
<h2>Verified Pending</h2>
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
			   <th align="left">File</th>
               <th align="left">&nbsp;</th>
                <th align="left">status</th>
                 <th align="left">Edit</th>
                 <th align="left">view</th>
                 <th align="left">delete</th>			    
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
	<td><?php echo($rows['file']!=NULL)?'<img src="uploaded/'.$rows['file'].'" width="50" height="50">' :'' ;?></td>
	<td align="left">&nbsp;</td>
<form method='post' action='activesverification.php'>
    <td>   <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn bg-danger" name='verify'  type='submit' value='verify'  >Verify</button>
      </td>  </form>
	<form method='post' action='verifyedit.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn bg-alert dark text-white " name='active' type='submit' value='Update'  ><i class="far fa-edit" style="font-size:20px;color: green;"></i></button>
       </td> </form>
       
       <form method='post' action='verifyinfo.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn btn-info dark text-white " name='sinfo' type='submit' value='Update'  ><i class="fa fa-info-circle" style="font-size:20px;color:white;"></i></button>
       </td> </form>
       
       <form method='post' action='#'>
  <td>     <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
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