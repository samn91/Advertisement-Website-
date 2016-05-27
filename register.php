
<?php

$DB_Username="root";
$DB_Password="asdfg";
$DB_Name="gts";


$q1=$_POST['textfield1'];
$q2=$_POST['textfield2'];
$q4=$_POST['textfield4'];


mysql_connect(localhost,$DB_Username,$DB_Password);
@mysql_select_db($DB_Name) or die( "Unable to select database");


$q="INSERT INTO SysUser(Email,Name,Password,Type)values('$q1','$q4','$q2','2');";
$result=mysql_query($q);


$q="insert into Device values ('sysadmin','$q1','','','','','',0,0,0,0,0,'gprmc_$q1','','','','','','','','','','',-1,'','','',0,0,'',0,0,0,0,'',0,0,0,7,0,'',0,0,0,'',0,0,0,0,0,0,0,0,0,0,0,0,0,0,'',0,0,0,0,0,0,1,'','','' ,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);";

$result=mysql_query($q);

mysql_close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
