<html>
<head><title>Advertisement</title></head>
<body  background="sky.jpg" >
<h3 align="CENTER"> To Create Client Account <A HREF="RegestrationPage.html"> HERE </A> </h3>
<h3 align="CENTER"> To Create Advertiser Account <A HREF="RegestrationPage 1.html"> HERE </A> </h3>
<h4 align="CENTER"> To Logout <A HREF="index.html"> HERE </A> </h4>
<form action="deladv.php" method="post">
<table>
<?php
mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");
$result = mysql_query("select * from SysUser s, Advertiser a where s.Email=a.Email;");
$num=mysql_numrows($result);
mysql_close();
$i=0;
?>
<tr>		
	<td></td><td>Eamil</td><td>Name</td><td>Latitude</td><td>Longitude</td><td>Password</td>
	</tr>	
<?php
while ($i < $num) {
	$email=mysql_result($result,$i,"Email");
	$name=mysql_result($result,$i,"Name");
	$lat=mysql_result($result,$i,"Latitude");	
	$lon=mysql_result($result,$i,"Longitude");	
	$pas=mysql_result($result,$i,"Password");
?>
	<tr>		
	<td><input type="checkbox" name="del[]" value="<?php echo $email?>"/></td><td><?php echo $email?></td><td><?php echo $name?></td><td><?php echo $lat?></td><td><?php echo $lon?> </td>
	<td><?php echo $pas?></td>
	</tr>	
<?php	
	$i++;
}
?>
<tr>
<th><input type="submit" value="Delete Advertiser"/></th>
</tr> 
</form>
</table>
</body>
</html>
