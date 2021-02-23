<?php session_start();

$pid = $_GET['pid'];
$price = $_GET['price'];



if(isset($_SESSION['mycart'][$pid]))
{
  $_SESSION['mycart'][$pid]['qty'] = $_SESSION['mycart'][$pid]['qty']+1;
  $_SESSION['mycart'][$pid]['price'] = $_SESSION['mycart'][$pid]['price']+$price;
}
else {
  $_SESSION['mycart'][$pid] = array("qty"=>1, "price"=>$price);
}



header('Location: ' . $_SERVER['HTTP_REFERER']);


// echo $pid;

?>
