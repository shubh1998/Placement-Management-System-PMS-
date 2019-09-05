 <!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System</title>
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
date_default_timezone_set('Asia/Kolkata');	
 //session_start();
 include("connect.php");
 include("header.php"); ?>

	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Add Notice</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="addnoticedb.php">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Title</label>
              <input type="text" placeholder="Title" name="title" required>
            </div><br><br><br><br>
            <div class="clearfix"> </div>
            <div class="col-md-6 form-group2">
              <label class="control-label">Company Type</label>
              <select name="type">
              <option value="0" >Select Type</option>
              <option value="public" >Public</option>
              <option value="student">Student</option>
            </select>
          </div><br><br><br><br>
            <div class="clearfix"> </div>
			      <div class="col-md-12 form-group1 ">
              <label class="control-label">Description</label>
              <textarea  placeholder="Description..." required name="description"></textarea>
            </div>
			    <div class="clearfix"> </div>
			  
			 <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
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