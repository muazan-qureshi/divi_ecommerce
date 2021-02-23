<?php include('header.php'); ?>

<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="breadcrumb">
					<a href="#"><i class="icon-home"></i> Home</a>
					<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
					<span class="current">Cart</span>
					<h2 class="entry-title">Your Cart</h2>
				</div>
			</div>
		</div>
	</div>
</div>


<div id="content">
	<div class="container">
		<div class="row">
			<div class="header text-center">
				<h3 class="small-title">Shopping cart</h3>
				<p>Shopping cart-Checkout-Order complete</p>
			</div>
			<div class="col-md-12">
				<div class="wishlist">
					<div class="col-md-4 col-sm-4 text-center">
						<p>Product</p>
					</div>
					<div class="col-md-2 col-sm-2">
						<p>Price</p>
					</div>
					<div class="col-md-2 col-sm-2">
						<p>Quantity</p>
					</div>
					<div class="col-md-2 col-sm-2">
						<p>Total</p>
					</div>
					<div class="col-md-2 col-sm-2">
						<p>Close</p>
					</div>
				</div>
			</div>
			<?php
			foreach ($_SESSION['cart'] as $key => $val) {


				foreach ($obj->sel_product_by_id($key) as $da) {
					$img = json_decode($da['p_img']);
					echo ('

   
<div class="wishlist-entry clearfix ">
<div class="col-md-4 col-sm-4">
<div class="cart-entry">
<a class="image" href="#"><img src="../admin-press/assets/images/product/' . $img[0] . '" alt=""></a>
<div class="cart-content">
<h4 class="title">' . $da['p_name'] . '</h4>
<p>' . $da['p_dec'] . '</p>
</div>
</div>
</div>
<div class="col-md-2 col-sm-2 entry">
<div class="price"> PKR
' . number_format($da['p_sale_price']) . " " . '<del>' . number_format($da['p_buy_price']) . '</del>
</div>
</div>
<div class="col-md-2 col-sm-2">
<ul class="quantity-selector">
<a href="main.php?pid=' . $da['p_id'] . '&price=' . $da['p_sale_price'] . '"><li class="entry number-minus"></li></a>
<li class="entry number">' . $val['qty'] . '</li>
<a href="addtocart.php?pid=' . $da['p_id'] . '&price=' . $da['p_sale_price'] . '"><li class="entry number-plus"></li></a>
</ul>
</div>
<div class="col-md-2 col-sm-2 entry">
<div class="price">
PKR ' . number_format($val['price']) . '
</div>
</div>
<div class="col-md-2 col-sm-2 entry">
<a class="btn-close" href="#"><i class="icon-close"></i></a>
</div>
</div>
 

');
				}
			}
			?>

			<a href="checkout.php" class="btn btn-danger ">Checkout</a>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>