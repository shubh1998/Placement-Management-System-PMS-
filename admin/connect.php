<?php
$server="localhost";
$username1="root";
$password="";
$database="placement_m_s";
$con=mysql_connect($server,$username1,$password);
if(!$con)
  
  die( "Not connected") or mysql_error();
mysql_select_db($database);   


?>