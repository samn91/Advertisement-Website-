<body bgcolor="C0C0C0">
<?php
session_start();
$DB_Username="root";
$DB_Password="asdfg";
$DB_Name="gts";

$un=$_POST['userName'];
$pass=$_POST['password'];
$_SESSION['email']=$un;

mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");
$query = "SELECT * FROM SysUser WHERE Email='$un' and Password='$pass';";
$result=mysql_query($query);
$row = mysql_fetch_array($result);
$num_results = mysql_num_rows($result);
$type=mysql_result($result,0,"Type");
if ($num_results <= 0)
header('Location: ' . $_SERVER['HTTP_REFERER']);
else{

if($type==0)
header('Location:RegestrationPage.html');

if($type==1)
header('Location:advertiser.php');

}

mysql_close();

?>
