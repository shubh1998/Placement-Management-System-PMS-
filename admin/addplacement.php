   
<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Upturn Smart Online Exam System" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
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
 ?>
	
<!--grid-->
 	<div class="validation-system">
    <ol class="breadcrumb">
                <center><li class="breadcrumb-item">
                  <h4><a href="">Add placed student Details</a></h4></li></center>
            </ol>
 		
 		<div class="validation-form">
 	<!---->
  	  
        <form method="post" action="addplacementdb.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <h4 class="breadcrumb-item"></h4>
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Enrollment Number.</label>
              <input type="text" placeholder="student enrollment number" name="studentenroll"  required>
            </div>

            <div class="col-md-6 form-group2">
              <label class="control-label">Company name</label>
              <?php
             include("connect.php");
             $sql ="SELECT DISTINCT company_name FROM campus_info";
                   $result = mysql_query($sql); ?>
              <select name="companyname">
          <?php 
                        while($row =mysql_fetch_assoc($result)) {
                        ?>
                       
                        <option  value="<?php echo $row['company_name']; ?>"><?php echo $row['company_name']; ?></option>
                        <?php } ?>
              </select>
            </div>

             <div class="clearfix"> </div></br>
            <div class="col-md-6 form-group2">
            <label class="control-label">Company Type</label>
              <select name="companytype">
              <option value="Technical" >Technical</option>
              <option value="Non Technical">Non Technical</option>
            </select>
            </div>
           
            <div class="col-md-6 form-group1">
              <label class="control-label">Package(LPA)</label>
              <input type="text" placeholder="company package name" name="package"  required>
            </div>
           
            <div class="col-md-6 form-group1">
              <label class="control-label">Job Profile</label>
              <input type="text" placeholder="job profile" name="jobprofile"  required>
            </div>
             <div class="col-md-6 form-group1">
              <label class="control-label">Job Location</label>
              <input type="text" placeholder="job location" name="joblocation"  required>
            </div>
             <div class="clearfix"> </div></br>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="updatecomp">Submit</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
           
			          <div class="clearfix"> </div>
          </div>
        </form>
 
 	<!---->
 </div>

</div>
 	<!--//grid-->
	
   
<?php 
}
else{
include("footer.php");
} ?>
</div></div></div>
<!-- script-for sticky-nav -->
<script src="js/navtongle.js"></script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

	<?php include("sidebar.php"); ?>
	
</body>
</html>