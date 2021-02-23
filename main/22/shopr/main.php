<?php   session_start();
class web_shopr{
	
	function con(){

		$con = mysqli_connect('localhost','root','','mybase');
		return $con;

	}// con end

	function catlog_sel(){
		$qu =mysqli_query($this->con(),"select * from catlog");
		return $qu;
	}

	function sel_product(){
		$q = mysqli_query($this->con(),"select * from product where p_status = 1");
		return $q;

	}
		function sel_product_by_id($a){
		$q = mysqli_query($this->con(),"select * from product where  p_id = $a");
		return $q;

	}



	function catlog_sel_by_id($a){
		$query =mysqli_query($this->con(),"select * from catlog where c_id = $a");
		return $query;


	}
	
	function catlog_sel_count(){
		$qu = mysqli_query($this->con(),"SELECT c.c_id,count(p_id) id ,c.c_name as ca FROM `product` as p LEFT JOIN catlog as c on c.c_id = p.p_catlog GROUP BY c.c_name");
		return $qu;

	}
	function product_sel_by_id($a){
	$query = mysqli_query($this->con(),"SELECT * FROM `product` where p_catlog = $a");
	return $query;

	}

	function c_register(){
		if(isset($_POST['btn_re'])){
			$a = $_POST['fname'];
			$b = $_POST['cname'];
			$c = $_POST['email'];
			$d = $_POST['psw'];
			$e = $_POST['phone'];
			$f = $_POST['add'];
			$query = "INSERT INTO `client_data`( `c_name`, `cc_name`, `c_email`, `c_psw`, `c_number`, `c_add`) VALUES ('$a','$b','$c','$d','$e','$f')";
			$qu = mysqli_query($this->con(),$query);
			echo $query;
			




		}

	}

	function client_login(){
		if(isset($_POST['btn_login'])){
			$a = $_POST['email'];
			$b = $_POST['psw'];

			$query = mysqli_query($this->con(),"SELECT `c_email`,`c_psw` FROM `client_data` WHERE  `c_email` = '$a' and c_psw = '$b'");
			$c = count($query);
			if($c == 1){
				$_SESSION['client_login'] = $_POST['email'];
			echo('<script>window.location.href="checkout.php"</script>');


			}
			else{
				echo('<script>alert("Something is wrong")</script>');
			}

		}

	}

	function client_login_data(){
		$a = $_SESSION['client_login'];
		$query = mysqli_query($this->con(),"select * from client_data where c_email = '$a' ");
		return $query;
	}


	function order_done(){

		if(isset($_POST['btn_order'])){
			$a = $_POST['c_id'];
			$b = $_POST['s_add'];
			$c = json_encode($_SESSION['cart']);
			foreach($_SESSION['cart'] as $key => $val){

				foreach($this->sel_product_by_id($key) as $da){
					$stock = $da['p_stock'] - $val['qty'];
									
				}

	$qu =mysqli_query($this->con(),"UPDATE `product` SET   p_stock = $stock where p_id = $key");
}

	$query = mysqli_query($this->con(),"INSERT INTO `orders`( `o_user`, `o_ship`, `o_data`) VALUES ($a,'$b','$c')");

	if(!$query){
			echo('<script>alert("Something is wrong")</script>');
	}
else{
		echo('<script>alert("Order done")</script>');
		session_destroy();
		header('location:index.php');

}

		}




	}

}//class end
$obj = new  web_shopr;

if(isset($_GET['pid'])){

$pid = $_GET['pid'];
$price = $_GET['price'];

$_SESSION['cart'][$pid]['qty'] = $_SESSION['cart'][$pid]['qty']-1;
$_SESSION['cart'][$pid]['price'] =  $_SESSION['cart'][$pid]['price']-$price ;

header('Location: ' . $_SERVER['HTTP_REFERER']);

}


?>