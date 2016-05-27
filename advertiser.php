<html>
<head><title>Advertisement</title></head>
<body  background="sky.jpg" >
<h3 align="CENTER"> To Logout <A HREF="index.html"> HERE </A> </h3>
<table>
<tr>
<form action="add.php" method="post">
<th>Advertisement: <textarea cols="50" rows="4" name="adv"></textarea></th>
<th>Expired Date: <input type="text" name="expdate" />YYYY-MM-DD HH:MM:SS</th>
</tr>
<th><input type="submit" value="Add Advertizment" /></th>
</form>
</table>
<form action="del.php" method="post">
<table>
<?php
mysql_connect(localhost,"root","asdfg");
@mysql_select_db("gts") or die( "Unable to select database");
session_start();
$email=$_SESSION['email'];
$result = mysql_query("select * from Advertisement where Email='$email';");//check it later
$num=mysql_numrows($result);
mysql_close();
$i=0;
?>
<tr>		
	<td></td><td>Advertizment</td><td>Creation Date</td><td>Experience Date</td>
	</tr>	
<?php
while ($i < $num) {
	$id=mysql_result($result,$i,"Id");
	$adv=mysql_result($result,$i,"Advertisement");
	$cre=mysql_result($result,$i,"Creation_Date");	
	$exp=mysql_result($result,$i,"Expired_Date");	
?>
	<tr>		
	<td><input type="checkbox" name="del[]" value="<?php echo $id?>"/></td><td><?php echo $adv?></td><td><?php echo $cre?> </td><td><?php echo $exp?></td>
	</tr>	
<?php	
	$i++;
}
?>
<tr>
<th><input type="submit" value="Delete Advertisement" /></th>
</tr> 
</form>
</table>
</body>
</html>
