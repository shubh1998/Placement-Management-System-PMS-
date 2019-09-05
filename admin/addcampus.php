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
                <center><li class="breadcrumb-item"><h4><a href="">Add  Details</a></h4></li></center>
            </ol>
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form method="post" action="addupcomingcompany.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <h4 class="breadcrumb-item"><h4></h4>
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
            
              <label class="control-label">Company name</label>
              <input type="text" placeholder="company name" name="companyname"  required>
            </div>
           
			<div class="col-md-6 form-group1 form-last">
              <label class="control-label">Campus date</label>
             <input type="date" placeholder="campus date  " name="date"  required>
            </div>
            
           <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group1">
              <label class="control-label">Company vanue</label>
              <input type="text" placeholder="company vanue  " name="companyvanue"  required>
            </div>
             
			<div class="col-md-6 form-group1">
              <label class="control-label">Reporting Time</label><br>
              <input type="time" placeholder="reporting time  " name="reporting"   >
            </div>
            
            <div class="clearfix"> </div>   </br>
            <div class="col-md-6 form-group2">
			<label class="control-label">Campus type</label>
              <select name="campustype">
            	<option value="close" >Close</option>
            	<option value="pool" >Pool</option>
                <option value="open">Open</option>
            </select>
			</div>
      <div class="col-md-6 form-group2">
      <label class="control-label">Company Type</label>
              <select name="companytype">
              <option value="Technical" >Technical</option>
              <option value="Non Technical">Non Technical</option>
            </select>
      </div>
            
            
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Company Profile</label>
              <textarea  placeholder="Company Profile"   name="companyprofile"></textarea>
             </div>
         
            <div class="clearfix"> </div>   </br>
            
            <div class="col-md-2 form-group1">
              <label class="control-label">Job profile</label>
             <input type="text" placeholder="Job profile  " name="jobprofile"   >
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">Job location</label>
              <input type="text" placeholder="Job location  " name="joblocation"   >
            </div>
            
            <div class="col-md-2 form-group1">
              <label class="control-label">bound(year.month) </label>
              <input type="text" placeholder="Company bound  " name="bondduration"  >
            </div>
           
			 <div class="col-md-2 form-group1">
              <label class="control-label">Package(LPA)</label>
             <input type="text" placeholder="Company Package  " name="package"   >
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">Joining Date</label>
              <input type="date" placeholder="Joining date  " name="joiningdate"   >
            </div>
            
             <div class="clearfix"> </div> </br>
            <div class="col-md-2 form-group1">
              <label class="control-label">X % </label>
              <input type="text" placeholder="10th percentage  " name="eligible10th"   >
            </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">XII %</label>
             <input type="text" placeholder="12th percentage  " name="eligible12th"    >
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">UG %</label>
              <input type="text" placeholder="UG percentage  " name="eligibleug"     >
            </div>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Registration link</label>
              <input type="text" placeholder="registration link  " name="registrationlink"  >
            </div>
             <div class="clearfix"> </div> </br>
           <div class="col-md-2 form-group2">
      <label class="control-label">Company profile</label>
              <select name="passout">
              <option value="2018" >2018</option>
               <option value="2018" >2019</option>
                <option value="2018" >2020</option>
                 <option value="2018" >2021</option>
                  <option value="2018" >2022</option>
            </select>
      </div>
            <div class="col-md-2 form-group1">
              <label class="control-label">Current backlog</label>
             <input type="text" placeholder="current backlog" name="backlog"    >
            </div>
			
            <div class="col-md-2 form-group1">
              <label class="control-label">Company Website</label>
              <input type="text" placeholder="company website" name="website"   ="">
            </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Eligible Branch</label>
              <input type="text" placeholder="Eligible Branch" name="branch"  >
            </div>
            <div class="clearfix"> </div></br>
            
      <div class="col-md-12 form-group1 ">
              <label class="control-label">Selection Process</label>
              <textarea  placeholder="selection process"   name="otherdetail"></textarea>
             </div>
            
 		    <div class="col-md-12 form-group1 ">
              <label class="control-label">Importaint Notice</label>
              <textarea  placeholder="Importaint notice"   name="selectionprocess"></textarea>
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