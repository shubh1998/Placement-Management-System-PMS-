<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System</title>
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
  

  include("connect.php");
 
  $sid=$_POST['id']; 
  $getselect=mysql_query("SELECT * from studenttbl  WHERE s_roll='$sid'");
 
  while($user = mysql_fetch_array($getselect))
  {
	$sid=$user['s_roll'];
	$fname=$user['fname'];
    $lname=$user['lname'];
	$gender=$user['gender'];
	$x=$user['10th'];
	$xii=$user['12th'];
	$ug=$user['ug'];
	$pyear=$user['pyear'];
	$branch=$user['branch']; 
	$course=$user['course'];
	$college=$user['college'];
	$backlog=$user['backlog'];
	$email=$user['email']; 
	$mobile_1=$user['mobile_1'];
	$address1=$user['address1']; 
	$dob=$user['dob'];
	
?>
   <?php include("header.php");?>
	
<!--grid-->
 	<div class="validation-system">
    <ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Update Company Details</a></h4></li></center>
            </ol>
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form method="post" action="verifyeditdb.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <h4 class="breadcrumb-item"><h4><a href="">Student EID: &nbsp;<?php echo $sid; ?></a></h4>
            <div class="clearfix"> </div>   </br>
            <div class="col-md-4 form-group1">
            <input type="hidden" name="s_roll" value="<?php echo $sid; ?>"/>
              <label class="control-label">First Name</label>
              <input type="text" name="fnmae" value="<?php echo $fname; ?>" required>
            </div>
           
			<div class="col-md-4 form-group1 form-last">
              <label class="control-label">Last Name</label>
             <input type="text"  name="lname" value="<?php echo $lname; ?>" required>
            </div>
             <div class="clearfix"> </div>   </br>
           
             <div class="col-md-2 form-group1">
              <label class="control-label">DOB</label>
             <input type="text"  name="dob" value="<?php echo $dob; ?>"   required>
            </div>
           
             
             <div class="col-md-2 form-group1">
              <label class="control-label">Gender</label>
             <input type="text"  name="gender" value="<?php echo $gender; ?>"   required>
            </div>
            <div class="col-md-4 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="mobile Number not available" name="mobile_1" value="<?php echo $mobile_1; ?>"  required>
            </div>
            
           <div class="clearfix"> </div>   </br>
            <div class="col-md-4 form-group1">
              <label class="control-label">Email</label>
              <input type="text" placeholder="email ID not available" name="email" value="<?php echo $email; ?>" required>
            </div>
      
         
            <div class="col-md-4 form-group1">
            
              <label class="control-label">College </label>
              <input type="text"  name="college" value="<?php echo $college; ?>" required>
            </div>
           
			 <div class="clearfix"> </div>   </br>
            <div class="col-md-2 form-group1">
              <label class="control-label">Course</label>
              <input type="text"  name="course" value="<?php echo $course; ?>"   required>
            </div>
            
            <div class="col-md-2 form-group1">
              <label class="control-label">Branch</label>
              <input type="text"  name="branch" value="<?php echo $branch; ?>" required>
            </div>
           
			  <div class="col-md-2 form-group1">
              <label class="control-label">Current backlog</label>
             <input type="text" placeholder="current backlog" name="backlog" value="<?php echo $backlog; ?>"   required>
            </div>
             <div class="col-md-2 form-group1">
              <label class="control-label">Passout</label>
              <input type="text" name="pyear" value="<?php echo $pyear; ?>"   required>
            </div>
            
             <div class="clearfix"> </div> </br>
            <div class="col-md-2 form-group1">
              <label class="control-label">X % </label>
              <input type="text" placeholder="10th percentage not available" name="x" value="<?php echo $x; ?>" required>
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">XII %</label>
             <input type="text" placeholder="12th percentage not available" name="xii" value="<?php echo $xii; ?>"   required>
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">UG %</label>
              <input type="text" placeholder="UG percentage not available" name="ug" value="<?php echo $ug; ?>"   required>
            </div>
             <div class="clearfix"> </div> </br>
               <div class="col-md-6 form-group1">
              <label class="control-label">Address</label>
              <input type="text" placeholder="Address not available" name="address1" value="<?php echo $address1; ?>"   required>
            </div>
			
			  <div class="clearfix"> </div></br>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="updatecomp">Update</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
          <div class="clearfix"> </div>
          </div>
        </form>
  <?php } 
   
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
			return new passout(year, month - 1, day).getTime();
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
	<?php include("sidebar.php"); ?>
	
</body>
</html>