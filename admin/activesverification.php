<?php
  ob_start();
  include("connect.php");
  if(isset($_POST['verify'])!="")
  {
  $student=$_POST['id'];
  $delete=mysql_query("UPDATE  studenttbl set verified=1 WHERE s_roll='$student'");
  echo $delete;
  if($delete)
     {
    echo "record inserted successfully"; 
     }
      else
      {
      echo mysql_error();
       }
   } 
  ob_end_flush();
 header("Location:studentverification.php");
 
?>