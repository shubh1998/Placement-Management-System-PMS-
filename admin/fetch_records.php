<?php
include("connect.php");
$allstudents = 0;
$pstudents = 0;
$ustudents = 0;
$total_campus = 0;
$total_placement = 0;
$up_campus = 0;
$notice = 0;
$feedback =0;
$debarred_students = 0;


$sql = "SELECT * FROM studenttbl";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $allstudents++;
    }
} else {

}

$sql = "SELECT * FROM studenttbl where status='1'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $pstudents++;
    }
} else {

}

$sql="SELECT * FROM add_placement";
$result=mysql_query($sql);

if(mysql_num_rows($result)>0){

  while($row=mysql_fetch_assoc($result)){
	  $total_placement++;
   }
  }else{
  }

$sql = "SELECT * FROM studenttbl where status='0'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $ustudents++;
    }
} else {

}


$sql = "SELECT * FROM campus_info";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $total_campus++;
    }
} else {

}

$sql = "SELECT * from campus_info WHERE date>CURDATE()";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $up_campus++;
    }
} else {

}
$sql = "SELECT * FROM noticetbl";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $notice++;
    }
} else {

}
$sql = "SELECT * from feedback";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $feedback++;
    }
} else {

}

$sql = "SELECT * from studenttbl WHERE status=0 AND debarred=1";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
   
    while($row = mysql_fetch_assoc($result)) {
     $debarred_students++;
    }
} else {

}

mysql_close();
?>