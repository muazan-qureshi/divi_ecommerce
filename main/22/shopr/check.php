<?php session_start(); 
foreach($_SESSION['cart'] as  $key => $value){
	echo "ID".$key." ". $value['qty']." ".$value['price']."<br>";
}


?>