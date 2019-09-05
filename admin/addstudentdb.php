<?php
	include("connect.php");             
		  $fname =  $_POST['fname'];
		   $lname =  $_POST['lname'];
		   $rollno =  $_POST['rollno'];
		   $email =  $_POST['email'];
		   $phone1 =  $_POST['phone1'];
		   $phone2 =  $_POST['phone2'];
		   $password =  $_POST['password'];
		    $dob = $_POST['dob'];
		   $gender =  $_POST['gender'];
           $blood =  $_POST['bldname'];
           $deptname =  $_POST['deptname'];
		    $catname =  $_POST['catname'];
			 $address =  $_POST['address'];
		  
		   $query="insert into studenttbl(fname,lname,rollno,gender,blood,email,phone,mobile,password,dob,address,deptname,catname) values('$fname','$lname','$rollno','$gender','$blood','$email','$phone1','$phone2','$password','$dob','$address','$deptname','$catname')";
	       
           $result= mysql_query($query);
	 
	             if($result){
		      echo "record inserted successfully";
				 }
	       else{
		   mysql_error();
	       mysql_close($con);
		   }
		     header("Location: addstudent.php");
?>		