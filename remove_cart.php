<?php
$del_val=$_GET['id'];
echo $del_val;
session_start();
if(($key = array_search($del_val, $_SESSION['cart'])) !== false) {
    unset($_SESSION['cart'][$key]);
    echo "removed";
}
foreach ($_SESSION['cart'] as  $value) {
	# code...
	echo $value;
}
?>