<?php session_start();
$pid=  $_GET['pid'];

$price =  $_GET['price'];

if(isset($_SESSION['cart'][$pid])){

$_SESSION['cart'][$pid]['qty'] = $_SESSION['cart'][$pid]['qty']+1;  
$_SESSION['cart'][$pid]['price'] =  $_SESSION['cart'][$pid]['price']+$price ;
}
else{
	$_SESSION['cart'][$pid] = array("qty"=>1,"price"=>$price);
}


header('Location: ' . $_SERVER['HTTP_REFERER']);
//unset($_SESSION['cart'])



 ?>