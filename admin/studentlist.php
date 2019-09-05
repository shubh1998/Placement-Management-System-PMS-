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

	<ol class="breadcrumb">
	             
     <div><center>
                
                 <h2>&nbsp;&nbsp;Filter Student List</h2>
                <form action="studentlist.php" method="post">
            &nbsp;&nbsp;
            <label class="radio-inline">
            <input type="radio" name="cs" value="cs">CS
            </label>
            <label class="radio-inline">
            <input type="radio" name="it" value="it">IT
            </label>
            <label class="radio-inline">
            <input type="radio" name="me" value="me">ME
            </label>
            <label class="radio-inline">
            <input type="radio" name="civil" value="civil">CIVIL
            </label>
            &nbsp;
            <button type="submit" class="btn btn-primary" name="submit">Apply</button> <button type="submit" class="btn btn-primary" name="reset">ALl</button> </br> 
            
            </form>  
            </center>         
              </div>
	</ol>

  	    
<?php

include("connect.php");
 if(isset($_POST['submit'])!="")
 {
$cs = empty($_POST['cs']) ? '' : $_POST['cs'];
$it = empty($_POST['it']) ? '' : $_POST['it'];
$me = empty($_POST['me']) ? '' : $_POST['me'];
$civil = empty($_POST['civil']) ? '' : $_POST['civil'];
$sql="select * from studenttbl where branch IN ('$cs','$it','$me','$civil') and verified='1'";
 }
 else
 {
	
	 $sql="select * from studenttbl where verified='1'";
 }
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">


<div class="w3l-table-info">
<right>
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
              
               <th align="left">Edit</th>
                <th align="left">View</th>
                 <th align="left">Delete</th>
			    
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
	
	
   
	
 <form method='post' action='editstudent.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn bg-alert dark text-white " name='update' type='submit' value='Update'  ><i class="far fa-edit" style="font-size:20px;color: green;"></i></button>
       </td> </form>
       
       <form method='post' action='studentprofile.php'>
     <td>  <input  type='hidden' value="<?php echo $rows['s_roll']; ?>" name='id'>
        <button class="btn btn-info dark text-white " name='sinfo' type='submit' value='Update'  ><i class="fa fa-info-circle" style="font-size:20px;color:white;"></i></button>
       </td> </form>
       
       <form method='post' action='activestudent.php'>
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