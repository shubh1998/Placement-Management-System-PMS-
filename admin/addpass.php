
<?php
    ob_start();
    include("connect.php");
  if(isset($_POST["submit"])) {
  $enroll=$_POST['enroll'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $branch=$_POST['branch']; 
  $email=$_POST['email']; 
  $password=$_POST['password'];
  $sql = "SELECT * FROM studenttbl WHERE s_roll='$enroll'";
  $result = mysql_query($sql);
    if (mysql_num_rows($result) > 0) 
     {
     $error = "Warning! This Enrollment no. already registered."; 
     }else
      {
     $insert=mysql_query("INSERT into studenttbl SET s_roll='$enroll',fname='$fname',lname='$lname',branch='$branch',email='$email',password='$password'");
    if($insert)
        {
          $error = "Successfully registered"; 
        }
       else
        {
          echo mysql_error();
         }
   
      }
     }
  ?>
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
                  <h4><a href="">Add placed student Details </a></h4></li>
               
                        </center>
            </ol>
            <?php if (isset($error)){ ?>
            
                <center>
                  <h4><a href=""> 
                        <div class="alert alert-info">
                      
                       <?php echo $error;?> </div>
                        </a></h4>
               
                        </center>
            <?php } ?>
  		                
 		<div class="validation-form">
 	<!---->
  	  
        <form method="post" action="#" enctype="multipart/form-data">
         	<div class="vali-form">
            <h4 class="breadcrumb-item"></h4>
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Enrollment Number.</label>
              <input type="text" placeholder="student enrollment number" name="enroll"  required>
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">First Name</label>
              <input type="text" placeholder="student first name" name="fname"  required>
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Last Name</label>
              <input type="text" placeholder="student last name" name="lname"  required>
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Email</label>
              <input type="text" placeholder="student email address" name="email"  required>
            </div>
              <div class="col-md-6 form-group2"">
              <label class="control-label">Branch</label>
              <select name="branch">
                    <option value="">Select Branch</option>
                    <option value="CS">CS</option>
                    <option value="IT">IT</option>
                    <option value="ME">ME</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="EC">EC</option>
              </select>
            </div>
             
           
             <div class="col-md-6 form-group1">
              <label class="control-label">Password</label>
              <input type="password" placeholder="Password" name="password"  required>
            </div>
             <div class="clearfix"> </div></br>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
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