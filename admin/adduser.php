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

<!--grid-->
<?php
session_start();
if($_SESSION["userid"]==true)
{
include("connect.php");?>
<?php include("header.php"); ?>
 	        <div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form method="post" action="adduserdb.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" placeholder="Firs tname" name="fname"  required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
             <input type="text" placeholder="Last name" name="lname"  required>
            </div>
			
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 form-group2">
			<label class="control-label">Gender</label>
              <select name="gender">
            	<option value="Male" selected="selected">Male</option>
            	<option value="Female" selected="selected">Female</option>
            </select>
			</div>					
			<div class="col-md-6 form-group2 group-mail form-last">
			 <label class="control-label">Blood Group</label>
              <select name="blood">
            	<option value="A" selected="selected" >A</option>
            	<option value="B" selected="selected" >B</option>
            	<option value="A+" selected="selected" >A+</option>
            	<option value="A-" selected="selected" >A-</option>
            	<option value="B+" selected="selected" >B+</option>
				<option value="B-" selected="selected" >B-</option>
				<option value="AB+" selected="selected" >AB+</option>
				<option value="AB-" selected="selected" >AB-</option>
				<option value="O+" selected="selected" >O+</option>
				<option value="O-" selected="selected" >O-</option>
            </select>
            </div>						
		      <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" name="email"   required="">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" name="phone"  required>
            </div>
            <div class="col-md-6 form-group1 form-last group-mail">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="mobile"  required>
            </div>
            <div class="clearfix"> </div>
            
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" name="pass" required>
            </div>
            
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date Of Birth</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="dob" required>
            </div>
             <div class="clearfix"> </div>
            
			 <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <textarea  placeholder="Address..." required name="address"></textarea>
             </div>
			
			  <div class="clearfix"> </div>
			  <div class="vali-form">
               <div class="col-md-6 form-group2 group-mail form-last">
			 <label class="control-label">Add Department</label>
              <select name="deptname">
            	<option value="deptname" selected="selected" >TRAINING PLACEMENT DEPART</option>
            	<option value="deptname" selected="selected" >COMPUTER SCIENCE</option>
            	<option value="deptname" selected="selected" >INFORMATION TECHNOLOGY</option>
            	<option value="deptname" selected="selected" >MECHANICAL</option>
            	<option value="deptname" selected="selected" >CIVIL</option>
            </select>
            </div>				
          
		    
			 
			 <div class="clearfix"> </div>
          </div>
		     
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">File</label>
			  
              <input type="file" name="ufile" <?php if(!isset($ufile)){ echo "required"; } ?>>
			  <input type="hidden" name="old_slider" value="<?php if(isset($ufile)){ echo $ufile; } ?>">
            </div>
             <div class="clearfix"> </div>
			  
		  
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="update">Submit</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
  <?php 
    mysql_close($con);
	?>
 	<!---->
 </div>

</div>
 	<!--//grid-->
	
   
<?php include("footer.php"); ?>
</div></div></div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		
		</script>
		<!-- /script-for sticky-nav -->
		<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
        <!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
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