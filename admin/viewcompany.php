<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Placement Management System" />

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
$sid=$_POST['id'];
include("connect.php");
$sql="SELECT * from add_placement where s_roll='$sid'";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Placed Students</h2>
<table width="100%" id="table">
<thead>
<tr>            <th align="left">S.No</th>
               <th align="left">Company Name</th>
               <th align="left">Package</th>
			   <th align="left">Job Profile</th>
			   <th align="left">Job Location</th>
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
     <td><?php echo $rows['company_name'];?></td>
    <td><?php echo $rows['package'];?></td>
	<td><?php echo $rows['job_profile'];?> </td>
    <td><?php echo $rows['job_location'];?></td>
      
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
</html>
