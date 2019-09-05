 
<?php
       ob_start();
       include("connect.php");  
	$companyname=$_POST['companyname'];
    $campustype=$_POST['campustype'];
    $compantype=$_POST['companytype'];
	$date=$_POST['date'];
	$companyvanue=$_POST['companyvanue'];
	$reporting=$_POST['reporting'];
	$batch=$_POST['passout'];
	$eligible10th=$_POST['eligible10th'];
	$eligible12th=$_POST['eligible12th']; 
	$eligibleug=$_POST['eligibleug'];
	$registrationlink=$_POST['registrationlink']; 
	$companyprofile=$_POST['companyprofile'];
	$jobprofile=$_POST['jobprofile']; 
	$joblocation=$_POST['joblocation'];
	$campanybound=$_POST['bondduration'];
	$package=$_POST['package'];
	$joiningdate=$_POST['joiningdate'];
	$passout=$_POST['passout'];
	$backlog=$_POST['backlog'];
	$branch=$_POST['branch'];
	$website=$_POST['website'];
	$requireskills=$_POST['requireskills'];
	$selectionprocess=$_POST['selectionprocess'];
	$note=$_POST['otherdetail'];
	$updated=mysql_query("INSERT campus_info SET company_name='$companyname',campus_type='$campustype',date='$date',campus_vanue='$companyvanue',reporting_time='$reporting',batch='$batch',eligible_10th='$eligible10th',eligible_12th='$eligible12th',eligible_ug='$eligibleug',registration_link='$registrationlink',company_profile='$companyprofile',company_type='$compantype',job_profile='$jobprofile',job_location='$joblocation',bond_duration='$campanybound',package='$package',joining_date='$joiningdate',passout='$passout',backlog='$backlog',branch='$branch',website='$website',require_skill='$requireskills',selection_process='$selectionprocess',other_detail='$note'");
   echo $updated;
  if($updated)
     {
    echo "record inserted successfully"; 
     }
      else
      {
      echo mysql_error();
       }
   
 
  header("Location:upcomingcompany.php");
	   

?>
