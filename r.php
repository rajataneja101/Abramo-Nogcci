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
for($i=1;$i<sizeof($array);$i++)
{
	if($i%3==0)
		echo("<br>");
echo $array[$i]['name'];
	echo "<a href=product_detail.php?rajat=".urlencode($array[$i]['name'])."&pro_name=".$array[$i]['id'].">Hello</a>";
	//echo "<input type=submit name='rajat2' value=".$array[$j]['path'].">";
	echo "\n"; // print the first rows username

}

mysql_close();
?>
</form>


