
<?php
$q1=$_POST['textfield1'];
$q2=$_POST['textfield2'];
$q3=$_POST['textfield3'];
$q4=$_POST['textfield4'];
$q5=$_POST['textfield5'];

$DB_Username="root";
$DB_Password="asdfg";
$DB_Name="gts";


mysql_connect(localhost,$DB_Username,$DB_Password);
@mysql_select_db($DB_Name) or die( "Unable to select database");
$q="INSERT INTO Advertiser(Email,Latitude,Longitude)values('$q1','$q3','$q4')";
$result=mysql_query($q);
$q="INSERT INTO SysUser(Email,Name,Password,Type)values('$q1','$q2','$q5','1')";
$result=mysql_query($q);

header('Location: ' . $_SERVER['HTTP_REFERER']);
mysql_close();

?>
