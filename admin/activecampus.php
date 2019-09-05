<?php
  ob_start();
  include("connect.php");
  $camp=$_POST['id'];
  if(isset($_POST['active'])!="")
  {
  $camp=$_POST['id'];
  $delete=mysql_query("UPDATE  campus_info set status=1 WHERE c_id='$camp'");
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
  $user=$_POST['id'];
  $delete=mysql_query("UPDATE  campus_info set status=0 WHERE c_id='$camp'");
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
  $user=$_POST['id'];
  $delete=mysql_query("DELETE  FROM campus_info WHERE c_id='$camp'");
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
 header("Location:upcomingcompany.php");
 
 
?>