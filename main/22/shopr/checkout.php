<?php include('header.php');
$obj->order_done(); ?>
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="#"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">Checkout</span>
<h2 class="entry-title">Checkout</h2>
</div>
</div>
</div>
</div>
</div>


<div id="content">
<div class="container">
<div class="row">
<?php 
if(!isset($_SESSION['client_login'])){
echo('<div class="col-md-6 col-sm-6 col-xs-12">
	<a href="register.php" class="btn btn-danger btn-block">Register</a>
	</div>
<div class="col-md-6 col-sm-6 col-xs-12">
	<a href="login.php" class="btn btn-danger btn-block">Login</a>
	</div>


	');

}
else{
	foreach($obj->client_login_data() as $c){

	echo('<div class="col-md-12 col-sm-6 col-xs-12">
		<form method="post">

<h2 class="title-checkout"><i class="icon-home"></i>User data</h2>
<div class="col-md-6">
	<input type="text"   class="form-control" value="'.$c['c_name'].'">
	<input type="hidden" name="c_id"  class="form-control" value="'.$c['c_id'].'">
</div>
<div class="col-md-6">
	<input type="text" class="form-control" value="'.$c['cc_name'].'">
</div>
<br><br>
<br>


<div class="col-md-6">
	<input type="text"    class="form-control" value="'.$c['c_email'].'">
</div>
<div class="col-md-6">
	<input type="text"   class="form-control" value="'.$c['c_add'].'">
</div>
<BR>
<BR>
<BR>
<div class="col-md-12">
	<textarea type="text" rows="5" name="s_add" placeholder="Enter Shipping Address" class="form-control"></textarea>
</div>

</div>
</div>');
}}
 ?>




<div class="mb-50"></div>
<div class="row">
<div class="col-md-6 col-sm-6 col-sx-12">
<div class="order-details">
<h2 class="title-checkout"><i class="icon-basket-loaded-loaded"></i>Your Order</h2>
<div class="order_review margin-bottom-35">
<table class="table table-responsive table-review-order">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-name">QTY</th>
<th class="product-total">Total</th>
</tr>
</thead>
<tbody>


<?php 
$total = 0;
foreach($_SESSION['cart'] as $key => $value){
foreach($obj->sel_product_by_id($key)  as $data){}


echo('<tr>
<td><p>'.$data['p_name'].'</p></td>
<td><p>'.$value['qty'].'</p></td>
<td><p class="price">'.number_format($value['price']).'</p></td>
</tr>');

$total += $value['price'];
}
 ?>
 
 
</tbody>
<tfoot>
<tr>
<th>Subtotal</th>
<td>
<p class="price">$87.00</p>
</td>
</tr>
<tr>
<th>Shipping</th>
<td>
<form action="#" class="shipping">
<div class="radio">
<label><input checked="" type="radio"> <span>Free Shipping</span></label>
</div>
<div class="radio">
<label><input type="radio"> <span>Flat Rate:</span> </label><span class="price"> $10.00</span>
</div>

</td>
</tr>
<tr>
<th>Total</th>
</tr>
</tfoot>
</table>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 col-sx-12">

<h2 class="title-checkout">
<i class="icon-credit-card"></i>
Payment Method COD
</h2>

 

<div class="card card--padding fill-bg">
<table class="table-total-checkout">
<tbody>
<tr>
<th>GRAND TOTAL:</th>
<td>PKR <?php echo (number_format($total)); ?></td>
</tr>
</tbody>
</table>
<button class="btn btn-common btn-full" type="submit" name="btn_order">Place Order Now <span class="icon-action-redo"></span></button>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>