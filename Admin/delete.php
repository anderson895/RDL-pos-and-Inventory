<?php
// include("../connection.php");
session_start();
function Search($value, $array)
{
	return (array_search($value, $array, false));
}
$i= Search($_GET['id'],$_SESSION['cart']);
unset($_SESSION['cart'][$i]);
unset($_SESSION['qty'][$i]);
$_SESSION['message'] = 'Product Removed in cart';
// $_SESSION['message'] = 'Product Removed in cart';
header('Location:admin.php');
?>