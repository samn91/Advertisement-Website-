<?php
mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");


$del = $_POST['del']; 
foreach($del as $a){
	mysql_query("DELETE FROM Advertisement WHERE Id = '$a';");

}
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
