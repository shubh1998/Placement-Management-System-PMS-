
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

	
<?php

include("connect.php");
$sql="SELECT * from studenttbl where status='0' and verified='1'";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Unplaced Students</h2>
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
               <th align="left">&nbsp;</th>
                
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
	
	<td align="left">&nbsp;</td>
   
	
 
       
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
<!--popup script start -->
<script type="text/javascript">
        
        function Delete() {
            return confirm('Would you like to delete the news');
        }

         function Update() {
            return confirm('Would you like to update the news');
        }

      </script>
      
<script type = "text/javascript">

function getConfirm(l)
{
  if(arguments[0] != null)
  {
    if(window.confirm('Get Full Source Code at reasonable cost  ' + l + '?\n'))
    {
      location.href = l;
    }
    
    else
    {
      event.cancelBubble = true;
      event.returnValue = false;
      return false;
    }
  }
  
  else
  {
    return false;
  }
  return;
}
</script>

	<!--popup script end -->
</html>html>