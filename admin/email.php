
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
<div class="left-content" >
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
$sql="select * from campus_info where c_id='10015'";
$result = mysql_query($sql);
?>
<div class="agile-grids " >
<div class="agile-tables" style="background-image:url(https://burgessart.files.wordpress.com/2012/09/100thpostbsm3.jpg); background-repeat:no-repeat">
<div class="w3l-table-info">
<?php while($rows=mysql_fetch_array($result))
{
	extract($rows)
	?> </br> 
     <p style="text-align: center;"><span style="text-decoration: underline; font-size:30px"><strong>CAMPUS ANNOUNCEMENT</strong></span></p>
       <h2 style=" font-size:25px">
	<?php echo $rows['campus_type'];?> Campus Drive | <?php echo $rows['company_name'];?> | <?php echo $rows['date'];?> | <?php echo $rows['branch'];?>-<?php echo $rows['batch'];?> Batch
</h2>
<p>
	<strong>
		 Dear Students,
	</strong>
</p>
<p>
	All the&nbsp;<?php echo $rows['branch'];?> <?php echo $rows['batch'];?> passing out batch&nbsp;students are hereby informed that a Campus Drive by&nbsp;<?php echo $rows['company_name'];?>&nbsp;is being scheduled on&nbsp;<?php echo $rows['date'];?> at&nbsp;<?php echo $rows['campus_vanue'];?>.
</p>
<p>
	<strong>
		 Reporting Venue:
	</strong>
	 &nbsp;<?php echo $rows['campus_vanue'];?>
</p>
<p>
	<strong>
		 Reporting Time:
	</strong>
	 &nbsp;<?php echo $rows['reporting_time'];?>. AM&nbsp;
</p>
<p>
	<strong>
		 Job Description:
	</strong>
    &nbsp;<?php echo $rows['job_profile'];?>. AM&nbsp;
<p>
	<strong>
		 Company Profile:
	</strong>
    &nbsp;<?php echo $rows['company_profile'];?>. &nbsp;
    </p>
<p>
	<strong>
		 Job Profile:
	</strong>
	&nbsp;<?php echo $rows['job_profile'];?>. &nbsp;
</p>
<p>
	<strong>
		 Desired skills:&middot;
	</strong>
    &nbsp;<?php echo $rows['require_skill'];?>. &nbsp;
</p>
<p><strong>Criteria:&middot;</strong></p>
<p style="text-align: left; padding-left: 60px;"><strong>&nbsp; X:<?php echo $rows['eligible_10th'];?>&nbsp;%</strong></p>
<p style="text-align: left; padding-left: 60px;"><strong>XII:<?php echo $rows['eligible_12th'];?>&nbsp;%</strong></p>
<p style="text-align: left; padding-left: 60px;"><strong>UG:<?php echo $rows['eligible_ug'];?>&nbsp;%</strong></p>
<p>
  <strong>
    Salary Range:&middot;
    </strong>
    <?php echo $rows['package'];?>. <strong>LPA</strong>
  </p>
  <p>
  <strong>
    Selection Process:&middot;
    </strong>
    <p><?php echo $rows['selection_process'];?><strong></strong></p>
  </p>
 <p>
	<strong>
		  registration link:
	</strong>
	 &nbsp;<a href="<?php echo $rows['registration_link'];?>" target="_blank"><?php echo $rows['registration_link'];?></a>
     </p> 
     <p>
     <h4><?php echo $rows['other_detail'];?></h4>
   
<?php }?>
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
