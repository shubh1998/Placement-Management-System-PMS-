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
  

  include("connect.php");
  if(isset($_POST['updatecomp'])!="")
  {
  $compid=$_POST['id']; 
  $getselect=mysql_query("SELECT * from campus_info  WHERE c_id='$compid'");
 
  while($user = mysql_fetch_array($getselect))
  {
	$cid=$user['c_id'];
	$companyname=$user['company_name'];
    $campustype=$user['campus_type'];
	$date=$user['date'];
	$companyvanue=$user['campus_vanue'];
	$reporting=$user['reporting_time'];
	$batch=$user['batch'];
	$eligible10th=$user['eligible_10th'];
	$eligible12th=$user['eligible_12th']; 
	$eligibleug=$user['eligible_ug'];
	$registrationlink=$user['registration_link']; 
	$companyprofile=$user['company_profile'];
	$jobprofile=$user['job_profile']; 
	$joblocation=$user['job_location'];
	$campanybound=$user['bond_duration'];
	$package=$user['package'];
	$joiningdate=$user['joining_date'];
	$passout=$user['passout'];
	$backlog=$user['backlog'];
	$branch=$user['branch'];
	$website=$user['website'];
	$requireskills=$user['require_skill'];
	$note=$user['other_detail'];
  $companytype=$user['company_type'];
   $selectionprocess=$user['selection_process'];
	
	
?>
   <?php include("header.php");?>
	
<!--grid-->
 	<div class="validation-system">
    <ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Update Company Details</a></h4></li></center>
            </ol>
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form method="post" action="updateupcomingcompany.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <h4 class="breadcrumb-item"><h4><a href="">Company ID: &nbsp;<?php echo $cid; ?></a></h4>
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
            <input type="hidden" name="cid" value="<?php echo $cid; ?>"/>
              <label class="control-label">Company name</label>
              <input type="text" placeholder="company name" name="companyname" value="<?php echo $companyname; ?>" required>
            </div>
           
			<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Campus date</label>
             <input type="date" placeholder="campus date not available" name="date" value="<?php echo $date; ?>" required>
            </div>
            
           <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Company vanue</label>
              <input type="text" placeholder="company vanue not available" name="companyvanue" value="<?php echo $companyvanue; ?>" required>
            </div>
             
			<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Reporting Time</label>
              <input type="time" placeholder="reporting time not available" name="reporting" value="<?php echo $reporting; ?>"  required>
            </div>
            
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group2">
			<label class="control-label">Campus type</label>
              <select name="campustype">
            	<option value="close"<?php if($campustype == 'close') { ?> selected="selected"<?php } ?>>Close</option>
            	<option value="pool"<?php if($campustype == 'pool') { ?> selected="selected"<?php } ?>>Pool</option>
                <option value="open"<?php if($campustype == 'open') { ?> selected="selected"<?php } ?>>Open</option>
            </select>
			</div>
      <div class="col-md-6 form-group2">
      <label class="control-label">Company type</label>
              <select name="company_type">
              <option value="close"<?php if($companytype == 'Technical') { ?> selected="selected"<?php } ?>>Technical</option>
              <option value="pool"<?php if($companytype == 'Non Technical') { ?> selected="selected"<?php } ?>>Non Technical</option>
               
            </select>
      </div>
      <div class="col-md-12 form-group1 ">
              <label class="control-label">Company profile</label>
              <textarea  placeholder="Importaint notice not available" required name="companyprofile"><?php echo $companyprofile; ?></textarea>
             </div>
          
             <div class="clearfix"> </div>   </br>
            <div class="col-md-2 form-group1">
              <label class="control-label">Job profile</label>
             <input type="text" placeholder="Job profile not available" name="jobprofile" value="<?php echo $companyprofile; ?>"   required>
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">Job location</label>
              <input type="text" placeholder="Job location not available" name="joblocation" value="<?php echo $joblocation; ?>"   required>
            </div>
            
            <div class="col-md-2 form-group1">
              <label class="control-label">bound(year.month) </label>
              <input type="text" placeholder="Company bound not available" name="bondduration" value="<?php echo $campanybound; ?>" required>
            </div>
           
			 <div class="col-md-2 form-group1">
              <label class="control-label">Package(LPA)</label>
             <input type="text" placeholder="Company Package not available" name="package" value="<?php echo $package; ?>"   required>
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">Joining Date</label>
              <input type="date" placeholder="Joining date not available" name="joiningdate" value="<?php echo $joiningdate; ?>"   required>
            </div>
            
             <div class="clearfix"> </div> </br>
            <div class="col-md-2 form-group1">
              <label class="control-label">X % </label>
              <input type="text" placeholder="10th percentage not available" name="eligible10th" value="<?php echo $eligible10th; ?>" required>
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">XII %</label>
             <input type="text" placeholder="12th percentage not available" name="eligible12th" value="<?php echo $eligible12th; ?>"   required>
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">UG %</label>
              <input type="text" placeholder="UG percentage not available" name="eligibleug" value="<?php echo $eligibleug; ?>"   required>
            </div>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Registration link</label>
              <input type="text" placeholder="registration link not available" name="registrationlink" value="<?php echo $registrationlink; ?>" required>
            </div>
            <div class="clearfix"> </div>   </br>
             <div class="col-md-2 form-group1">
              <label class="control-label">pass-out year</label>
              <input type="text" placeholder="pass-out year" name="passout" value="<?php echo $passout; ?>" required>
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">Current backlog</label>
             <input type="text" placeholder="current backlog" name="backlog" value="<?php echo $backlog; ?>"   required>
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">Company Website</label>
              <input type="text" placeholder="company website not available" name="website" value="<?php echo $website; ?>"  required="">
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Eligible Branch</label>
              <input type="text" placeholder="Eligible Branch not available" name="branch" value="<?php echo $branch; ?>"   required>
            </div>
            <div class="clearfix"> </div></br>
            
       <div class="col-md-12 form-group1 ">
              <label class="control-label">Selection Process</label>
              <textarea  placeholder="selection process" required name="selectionprocess"><?php echo $selectionprocess; ?></textarea>
             </div>

            <div class="col-md-12 form-group1 ">
              <label class="control-label">Require Skills</label>
              <textarea  placeholder="Require Skills not available" required name="requireskills"><?php echo $requireskills; ?></textarea>
             </div>
            
 		    <div class="col-md-12 form-group1 ">
              <label class="control-label">Importaint Notice</label>
              <textarea  placeholder="Importaint notice not available" required name="otherdetail"><?php echo $note; ?></textarea>
             </div>
			
			  <div class="clearfix"> </div></br>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="updatecomp">Update</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
          <div class="clearfix"> </div>
          </div>
        </form>
  <?php }} 
   
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