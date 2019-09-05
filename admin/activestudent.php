<?php 

  ob_start();
  include("connect.php");
  if(isset($_POST['active'])!="")
  {
  $student=$_POST['id'];
  $delete=mysql_query("UPDATE  studenttbl set status=1 WHERE s_roll='$student'");
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


  if(isset($_POST['inactive'])!="")
  {
  $student=$_POST['id'];
  $delete=mysql_query("UPDATE  studenttbl set status=0 WHERE s_roll='$student'");
  echo $delete;
  if($delete)
  {
    echo "record UPDATE successfully"; 
  }
  else
  {
      echo mysql_error();
  }
  }
   if(isset($_POST['delete'])!="")
  {
  $student=$_POST['id'];
  $delete=mysql_query("DELETE  FROM studenttbl WHERE s_roll='$student'");
  echo $delete;
  if($delete)
  {
    echo "record DELETED successfully"; 
  }
  else
  {
      echo mysql_error();
  }
  }
  ob_end_flush();
 header("Location:studentlist.php");
 
?>