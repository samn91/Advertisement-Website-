<?php
mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");


$del = $_POST['del']; 
foreach($del as $d){
	mysql_query("DELETE FROM Advertiser WHERE Email = '$d';");
	mysql_query("DELETE FROM SysUser WHERE Email = '$d';");
	mysql_query("DELETE FROM Advertisement WHERE Email = '$d';");

}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
