<?php
 
  ob_start();
  include("connect.php");
  if(isset($_POST['active'])!="")
  {
  $user=$_POST['id'];
  $delete=mysql_query("UPDATE  usertbl set status=1 WHERE uid='$user'");
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
  $delete=mysql_query("UPDATE  usertbl set status=0 WHERE uid='$user'");
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
  $delete=mysql_query("DELETE  FROM usertbl WHERE uid='$user'");
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
 header("Location:userlist.php");
 
?>