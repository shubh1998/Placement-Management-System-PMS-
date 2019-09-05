<?php 
     include("connect.php");
  if(isset($_POST['submit'])){
	 echo $Firstname=$_POST['Firstname'];    
	 echo $Lastname=$_POST['Lastname']; 
	 echo $Email=$_POST['Email']; 
	 echo $DOB=$_POST['DOB'];   
	 echo $Rollno=$_POST['Rollno']; 
	 echo $UG_percentage=$_POST['UG_percentage'];    
	echo  $XII_percentage=$_POST['12th_percentage']; 
	echo  $X_percentage=$_POST['10th_percentage'];       
	echo  $Pyear=$_POST['Pyear'];
	echo  $Branch=$_POST['Branch'];    
	echo  $College=$_POST['College'];
	echo  $Course=$_POST['Course'];    
	echo  $Backlog=$_POST['Backlog']; 
	echo  $Mobile=$_POST['Mobile']; 
	echo  $Gender=$_POST['Gender']; 
	echo  $Address=$_POST['Address'];  
	 $date=date("d/m/y");
  echo $date;  
	$insert=mysql_query("UPDATE studenttbl SET   s_roll='$Rollno',fname='$Firstname',lname='$Lastname',10th='$X_percentage',12th='$XII_percentage',ug='$UG_percentage',pyear='$Pyear',branch='$Branch',college='$College',course='$Course',backlog='$Backlog',mobile_1='$Mobile',gender='$Gender',address1='$Address',dob='$DOB',rdate='$date' where s_roll='$Rollno'"); 
	
  if($insert)
     {
    $msg = "Feedback Successfully Submitted";
    header("Location:index1.php"); 
      }
      else
      {
      echo mysql_error();
       }
     }
?>