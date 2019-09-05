
<?php
    ob_start();
    include("connect.php");
   if(!empty($_POST["submit"])) {
	$enroll=$_POST['enroll'];
	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
	$branch=$_POST['branch']; 
	$email=$_POST['email']; 
	$password=$_POST['password'];
	$check=mysqli_query("SELECT COUNT(s_roll) FROM studenttbl WHERE s_roll = '$enroll'");
	$rows=mysql_num_rows($check);
    if($check>=1)
   {
    $msg="User Already in Exists<br/>";
    }
    else
     {
      echo mysql_error();
       }
   
    
}
?>
