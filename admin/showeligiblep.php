<!DOCTYPE HTML>
<html>
<head>
<title>Placement Management System
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Placement Management System" />
</head> 
<body>
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="mother-grid-inner">
<?php 
session_start();

if($_SESSION["userid"]==true)
{

 include("connect.php");
include("header.php"); ?>
    
<?php

include("connect.php");
$companyname = empty($_POST['companyname']) ? '' : $_POST['companyname'];
$companytype = empty($_POST['company_type']) ? '' : $_POST['company_type'];
$package = empty($_POST['package']) ? '' : $_POST['package'];

$sql="SELECT
a.s_roll,
b.s_roll,
b.branch,
b.course,
b.email,
b.mobile_1
FROM
add_placement AS a ,
studenttbl AS b
WHERE
a.s_roll = b.s_roll or (package>='$package' and company_name>='$companyname' and company_type>='$companytype')";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">

<h2>List of Debarred Students</h2>
<botton class="btn bg-success"  onclick="tableToExcel('testTable', 'W3C Example Table')">download list <i class="fa fa-cloud-download"></i></botton>
<table width="100%" id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides">
<thead>
<tr>
            
             <th align="left">Enrollment</th>
             
             		    
</tr>
</thead>
<tbody>
<?php 
$count=1;
while($rows=mysql_fetch_array($result))
{
	extract($rows);
	?>

    <tr>
    <td height="81"><?php echo $count;?></td>
     <td><?php echo $rows['s_roll'];?></td>
    
     <td></td>
    </tr>
<?php
$count++;
 }?>
</tbody>
</table>
</div>
</div>
</div>
<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
	
	</div>
    <script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
</body>

</html>