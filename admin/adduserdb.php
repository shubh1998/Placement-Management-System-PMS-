 
<?php
       ob_start();
       include("connect.php");
	  	
           $fname=$_POST['fname'];
		   $lname=$_POST['lname'];
		   $gender=$_POST['gender'];
		   $blood=$_POST['blood'];
		   $email=$_POST['email'];
		   $phone=$_POST['phone'];
		   $mobile=$_POST['mobile'];
		   $password=$_POST['pass'];
		   $dob=$_POST['dob'];
		   $address=$_POST['address'];
		   $deptname=$_POST['deptname'];
		 $imgFile = $_FILES['ufile']['name'];
		$tmp_dir = $_FILES['ufile']['tmp_name'];
		$imgSize = $_FILES['ufile']['size'];
		if($imgFile)
		{
			$upload_dir = 'uploaded/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$userprofile = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$uid['file']);
					move_uploaded_file($tmp_dir,$upload_dir.$userprofile);
				}
				else
				{
					$errMSG = "Sorry, Your File Is Too Large To Upload. It Should Be Less Than 5MB.";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF Extension Files Are Allowed.";		
			}	
		}
		else
		{
			$userprofile=$_POST['old_slider'];
		}
		  
		   
		   $updated=mysql_query("INSERT INTO usertbl SET 
                fname='$fname',lname='$lname',gender='$gender',blood='$blood',email='$email',phone='$phone',mobile='$mobile',password='$password',dob='$dob',address='$address',deptname='$deptname',file='$userprofile'") or die();
       if($updated)
      {
		 
		 header("Location:userlist.php");
      }
	       
      
	   

?>
