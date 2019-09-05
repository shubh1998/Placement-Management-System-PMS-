
<?php
       ob_start();
       include("connect.php");
	  $sid=$_POST['s_roll'];
	$fname=$_POST['fnmae'];
    $lname=$_POST['lname'];
	$gender=$_POST['gender'];
	$x=$_POST['x'];
	$xii=$_POST['xii'];
	$ug=$_POST['ug'];
	$pyear=$_POST['pyear'];
	$branch=$_POST['branch']; 
	$course=$_POST['course'];
	$college=$_POST['college'];
	$backlog=$_POST['backlog'];
	$email=$_POST['email']; 
	$mobile_1=$_POST['mobile_1'];
	$address1=$_POST['address1']; 
	$dob=$_POST['dob'];
	echo $address1;
	echo $address1;
	$updated=mysql_query("UPDATE studenttbl SET            fname='$fname',lname='$lname',gender='$gender',10th='$x',12th='$xii',ug='$ug',pyear='$pyear',branch='$branch',course='$course',college='$college',backlog='$backlog',email='$email',mobile_1='$mobile_1',address1='$address1',dob='$dob' WHERE s_roll='$sid'");
   echo $updated;
  if($updated)
     {
    echo "record inserted successfully"; 
     }
      else
      {
      echo mysql_error();
       }
   
    
 header("Location:studentverification.php");
 
	   

?>
