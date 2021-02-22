<?php session_start();

$pid = $_GET['pid'];
$_SESSION['mycart'][$pid] = $pid;

header('Location: ' . $_SERVER['HTTP_REFERER']);


// echo $pid;

?>
