<?php
$con = mysql_connect("localhost","root","root");
$db=mysql_select_db("abramo");
// Check connection
  $q="SELECT id, name, path  FROM shoes";
$results=mysql_query($q);
  ?>

  <?php
  $array=array();
 while($row = mysql_fetch_assoc($results,MYSQL_ASSOC)) {
 	?>
 	<?php
    $array[]=$row;
}
?>
<form action="product_detail.php" method="get">
<?php
for($i=0;$i<10;$i++)
{
	for($j=$i;$j<$i+3;$j++)
	{
		echo $array[$j]['path'];
	echo "<a href=product_detail.php?rajat=".$array[$j]['id']."><input type=submit name='rajat' value=".$array[$j]['path']."></a><br>";
	//echo "<input type=submit name='rajat2' value=".$array[$j]['path'].">";
	echo "\n"; // print the first rows username
}
}

mysql_close();
?>
</form>
<form  action="product_detail.php" method="get">
<input type="text" name="sa">
<input type="submit" name="ds">

