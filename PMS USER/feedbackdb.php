
<?php 
     include("connect.php");
  if(isset($_POST['submit'])){
	 $subject=$_POST['subject'];    
	 $feedback=$_POST['feedback']; 
  $date=date("d/m/y");
  echo $date;
   echo $subject;   
	$insert=mysql_query("INSERT into  feedback SET  subject='$subject',description='$feedback',postdate='$date'"); 
  if($insert)
     {
    $error = "Incorrect username or password"; 
      }
      else
      {
      echo mysql_error();
       }
     }
?>