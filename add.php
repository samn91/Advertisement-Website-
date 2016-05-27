<?php
mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");

$adv=$_POST['adv'];
$exp=$_POST['expdate'];
session_start();
$email=$_SESSION['email'];
$result = mysql_query("insert into Advertisement (Email,Advertisement,Expired_Date) values ('$email','$adv','$exp');");
header('Location: ' . $_SERVER['HTTP_REFERER']);
mysql_close($con);



?>
