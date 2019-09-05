<?php
 include('connect.php');
$sroll=$_POST['studentenroll'];
$companyname=$_POST['companyname'];
$package=$_POST['package'];
$jobprofile=$_POST['jobprofile'];
$joblocation=$_POST['joblocation'];
$companytype=$_POST['companytype'];

$query="Insert into add_placement(s_roll,company_name,package,job_profile,job_location,company_type) VALUES('$sroll','$companyname','$package','$jobprofile','$joblocation','$companytype')";
$query1=" UPDATE studenttbl SET status='1' WHERE s_roll='$sroll'";
echo $query;
echo $query1;
   $result= mysql_query($query);
	 
	             if($result){
		      echo "record inserted successfully";
				 }
				 $result1= mysql_query($query1);
	 
	             if($result1){
		      echo "record inserted successfully";
				 }
	      
	          header('Location:addplacement.php');    
?>		