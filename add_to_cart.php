<?php
session_start();
$code=$_POST['product_code'];
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
array_push($_SESSION['cart'],$code);
echo "added to the cart";
foreach ($_SESSION['cart'] as $value) {
	# code...
	echo $value;
}
?>
