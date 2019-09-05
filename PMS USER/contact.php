<?php
include("connect.php");
echo $name=$_POST['name'];
echo $email=$_POST['email'];
echo $subject=$_POST['subject'];
echo $message=$_POST['message'];
echo $datec=date("Y/m/d");
echo $query=mysql_query("INSERT INTO contact SET name='$name',email='$email',subject='$subject',message='$message',datec='$datec'");
 if($query!=0)
     {
    echo "record inserted successfully"; 
     }
      else
      {
      echo mysql_error();
       }
      

   header("Location:contact.html")

?>