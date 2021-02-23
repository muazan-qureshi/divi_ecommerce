<?php include('main.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Ecommerce">
	<title>ShopR - eCommerce Template</title>

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">

	<link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css">

	<link rel="stylesheet" href="fonts/line-icons/line-icons.css" type="text/css">

	<link rel="stylesheet" href="assets/css/main.css" type="text/css">

	<link rel="stylesheet" href="assets/css/settings.css" type="text/css">

	<link rel="stylesheet" href="assets/css/animate.css" type="text/css">

	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css">

	<link rel="stylesheet" href="assets/css/ion.rangeSlider.css" type="text/css">
	<link rel="stylesheet" href="assets/css/ion.rangeSlider.skinFlat.css" type="text/css">

	<link rel="stylesheet" href="assets/css/component.css" type="text/css">

	<link rel="stylesheet" href="assets/css/slick.css" type="text/css">
	<link rel="stylesheet" href="assets/css/slick-theme.css" type="text/css">

	<link rel="stylesheet" href="assets/css/nivo-lightbox.css" type="text/css">

	<link rel="stylesheet" href="assets/css/color-switcher.css" type="text/css">

	<link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">

	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
</head>

<body>

	<div class="header">

		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-4">
						<div class="language-wrapper">
							<div class="box-language">
								<form id="form-language">
									<div class="btn-group toggle-wrap">
										<span class="toggle">
											<span><img src="assets/img/language/flag-lang.png" alt="English" title="English" height="11" width="16"> English</span>
											<span class="hidden">Language</span>
										</span>
										<ul style="display: none;" class="toggle_cont pull-right">
											<li>
												<button class="language-select selected" type="button" name="en-gb">
													<img src="assets/img/language/en-gb.png" alt="English" title="English" height="11" width="16">
													English </button>
											</li>
											<li>
												<button class="language-select" type="button" name="de-DE">
													<img src="assets/img/language/de-DE.png" alt="Deutsch" title="Deutsch" height="11" width="16">
													Deutsch </button>
											</li>
											<li>
												<button class="language-select" type="button" name="ru-ru">
													<img src="assets/img/language/ru-ru.png" alt="Русский" title="Русский" height="11" width="16">
													Русский </button>
											</li>
										</ul>
									</div>
								</form>
							</div>
							<div class="box-currency">
								<form method="post" id="form-currency">
									<div class="btn-group toggle-wrap">
										<span class="toggle">
											$USD
										</span>
										<ul class="toggle_cont pull-right">
											<li>
												<button class="currency-select selected" type="button" name="USD">
													$ USD </button>
											</li>
											<li>
												<button class="currency-select" type="button" name="EUR">
													€ EUR
												</button>
											</li>
											<li>
												<button class="currency-select" type="button" name="GBP">
													£ GBP </button>
											</li>
										</ul>
									</div>
								</form>
							</div>
							<a href="#"><i class="icon-phone"></i> Call Us: (123) 456- 789</a>
						</div>
						<div class="clear"></div>
					</div>
					<div class="col-md-6 col-sm-8">

						<div class="search-area">
							<form>
								<div class="control-group">
									<ul class="categories-filter animate-dropdown">
										<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li class="menu-header">Clothing</li>
												<li><a tabindex="-1" href="#">- Men</a></li>
												<li><a tabindex="-1" href="#">- Women</a></li>
												<li><a tabindex="-1" href="#">- Boys</a></li>
												<li><a tabindex="-1" href="#">- Girls</a></li>
												<li class="menu-header">Electronics</li>
												<li><a tabindex="-1" href="#">- Laptops</a></li>
												<li><a tabindex="-1" href="#">- Desktops</a></li>
												<li><a tabindex="-1" href="#">- Cameras</a></li>
												<li><a tabindex="-1" href="#">- Mobile Phones</a></li>
											</ul>
										</li>
									</ul>
									<input class="search-field" placeholder="Search here...">
									<a class="search-button" href="#"><i class="icon-magnifier"></i></a>
								</div>
							</form>
						</div>

						<div class="shop-cart">
							<ul>
								<li><a class="cart-icon cart-btn" href="wishlist.html"><span class="icon-heart"></span></a></li>
								<li>
									<a href="cart.php" class="cart-icon cart-btn"><i class="icon-basket-loaded"></i><span class="cart-label">

											<?php //echo count($_SESSION['cart'])  ?>


										</span></a>
									<div class="cart-box">
										<div class="popup-container">
											<div class="cart-entry">
												<a href="#" class="image">
													<img src="assets/img/products/product-menu-1.jpg" alt="">
												</a>
												<div class="content">
													<a href="#" class="title">Pullover Batwing</a>
													<p class="quantity">Quantity: 3</p>
													<span class="price">$45.00</span>
												</div>
												<div class="button-x">
													<i class="icon-close"></i>
												</div>
											</div>
											<div class="cart-entry">
												<a href="#" class="image">
													<img src="assets/img/products/product-menu-2.jpg" alt="">
												</a>
												<div class="content">
													<a href="#" class="title">Pullover Batwing</a>
													<p class="quantity">Quantity: 3</p>
													<span class="price">$90.00</span>
												</div>
												<div class="button-x">
													<i class="icon-close"></i>
												</div>
											</div>
											<div class="summary">
												<div class="subtotal">Sub Total</div>
												<div class="price-s">$210.5</div>
											</div>
											<div class="cart-buttons">
												<a href="#" class="btn btn-border-2">View Cart</a>
												<a href="#" class="btn btn-common">Checkout</a>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>


		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="row">
					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.html">
							<img src="assets/img/logo.png" alt="">
						</a>
					</div>
					<div class="navbar-collapse collapse">

						<ul class="nav navbar-nav">
							<li>
								<a class="active" href="index.php">Home <span class="caret"></span></a>
								<ul class="dropdown">
									<li>
										<a class="active" href="index.html">
											Home V1
										</a>
									</li>
									<li>
										<a href="index-2.html">
											Home V2
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="about.html">
									About
								</a>
							</li>
							<li>
								<a href="#">Catalog <span class="caret"></span></a>
								<div class="dropdown mega-menu megamenu1">
									<div class="row">
										<div class="col-sm-3 col-xs-12">
											<ul class="menulinks">
												<li class="maga-menu-title">
													<a href="#">Men</a>
												</li>
												<li><a href="category.html">Clothing</a></li>
												<li><a href="category.html">Handbags</a></li>
												<li><a href="category.html">Maternity</a></li>
												<li><a href="category.html">Jewelry</a></li>
												<li><a href="category.html">Scarves</a></li>
											</ul>
										</div>
										<div class="col-sm-3 col-xs-12">
											<ul class="menulinks">
												<li class="maga-menu-title">
													<a href="#">Women</a>
												</li>
												<li><a href="category.html">Handbags</a></li>
												<li><a href="category.html">Jewelry</a></li>
												<li><a href="category.html">Clothing</a></li>
												<li><a href="category.html">Watches</a></li>
												<li><a href="category.html">Hats</a></li>
											</ul>
										</div>
										<div class="col-sm-3 col-xs-12">
											<ul class="menulinks">
												<li class="maga-menu-title">
													<a href="#">Accessories</a>
												</li>
												<li><a href="category.html">Belts</a></li>
												<li><a href="category.html">Scarves</a></li>
												<li><a href="category.html">Hats</a></li>
												<li><a href="category.html">Ties</a></li>
												<li><a href="category.html">Handbags</a></li>
											</ul>
										</div>
										<div class="col-sm-3 col-xs-12">
											<span class="block-last">
												<img src="assets/img/block_menu.jpg" alt="">
											</span>
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="#">Shop <span class="caret"></span></a>
								<div class="dropdown mega-menu megamenu2">
									<div class="row">
										<div class="col-sm-3 col-xs-12">
											<ul class="menulinks">
												<li class="maga-menu-title">
													<a href="#">Shop Types</a>
												</li>
												<li><a href="shop.html">Shop</a></li>
												<li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
												<li><a href="shop-list.html">Shop List Sidebar</a></li>
												<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
												<li><a href="product-details.html">Product Details</a></li>
											</ul>
										</div>
										<div class="col-sm-3 col-xs-12">
											<ul class="menulinks">
												<li class="maga-menu-title">
													<a href="#">Shop Pages</a>
												</li>
												<li><a href="shopping-cart.html">Cart Page</a></li>
												<li><a href="checkout.html">Checkout Page</a></li>
												<li><a href="wishlist.html">Wishlist</a></li>
												<li><a href="order.html">Your Order</a></li>
												<li><a href="login.html">Login</a></li>
												<li><a href="login-form.html">My Account</a></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li>
								<a href="#">Pages</a>
								<ul class="dropdown">


									<?php
									foreach ($obj->catlog_sel() as $cat) {
										echo ('<li><a href="product-details.php?catlog=' . $cat['c_id'] . '">' .  $cat['c_name'] . '</a></li>');
									}
									?>


								</ul>
							</li>
							<li>
								<a href="#">Blog <span class="caret"></span></a>
								<ul class="dropdown">
									<li>
										<a href="blog.html">
											Blog Right Sidebar
										</a>
									</li>
									<li>
										<a href="blog-left-sidebar.html">
											Blog Left Sidebar
										</a>
									</li>
									<li>
										<a href="blog-full-width.html">
											Blog Full Width
										</a>
									</li>
									<li>
										<a href="blog-details.html">
											Blog Details
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="contact.html">
									Contact
								</a>
							</li>
						</ul>

						<div class="icon-right pull-right">
							<div class="text-right">

								<div class="account link-inline">
									<div class="dropdown text-right">
										<a href="#" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown">
											<span class="icon-user"></span> Account <span class="icon-arrow-down"></span>
										</a>
										<ul class="dropdown-menu">
											<li><a href="login-form.html"><span class="icon icon-user"></span>My Account</a></li>
											<li><a href="wishlist.html"><span class="icon icon-heart"></span>My Wishlist</a></li>
											<li><a href="compare.html"><span class="icon icon-graph"></span>Compare</a></li>
											<li><a href="checkout.html"><span class="icon icon-check"></span>Checkout</a></li>
											<li><a href="login.html"><span class="icon icon-lock"></span>Log In</a></li>
											<li><a href="register.html"><span class="icon icon-user-follow"></span>Create an account</a></li>
											<li><a href="#"><span class="icon icon-close"></span>close</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>


			<ul class="mobile-menu">
				<li>
					<a class="active" href="index.html">
						Home
					</a>
					<ul class="dropdown">
						<li>
							<a class="active" href="index.html">Home V1</a>
						</li>
						<li>
							<a href="index-2.html">Home V2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="#">Catalog</a>
					<ul class="dropdown menulinks">
						<li class="maga-menu-title">
							<a href="#">Men</a>
						</li>
						<li><a href="category.html">Clothing</a></li>
						<li><a href="category.html">Handbags</a></li>
						<li><a href="category.html">Maternity</a></li>
						<li><a href="category.html">Jewelry</a></li>
						<li><a href="category.html">Scarves</a></li>
						<li class="maga-menu-title">
							<a href="#">Women</a>
						</li>
						<li><a href="category.html">Handbags</a></li>
						<li><a href="category.html">Jewelry</a></li>
						<li><a href="category.html">Clothing</a></li>
						<li><a href="category.html">Watches</a></li>
						<li><a href="category.html">Hats</a></li>
						<li class="maga-menu-title">
							<a href="#">Accessories</a>
						</li>
						<li><a href="category.html">Belts</a></li>
						<li><a href="category.html">Scarves</a></li>
						<li><a href="category.html">Hats</a></li>
						<li><a href="category.html">Ties</a></li>
						<li><a href="category.html">Handbags</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Shop</a>
					<ul class="menulinks">
						<li class="maga-menu-title">
							<a href="#">Shop Types</a>
						</li>
						<li><a href="shop.html">Shop</a></li>
						<li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
						<li><a href="shop-list.html">Shop List Sidebar</a></li>
						<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
						<li><a href="product-details.html">Product Details</a></li>
						<li class="maga-menu-title">
							<a href="#">Shop Pages</a>
						</li>
						<li><a href="shopping-cart.html">Cart Page</a></li>
						<li><a href="checkout.html">Checkout Page</a></li>
						<li><a href="wishlist.html">Wishlist</a></li>
						<li><a href="order.html">Your Order</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="login-form.html">My Account</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="dropdown">
						<li>
							<a href="about.html">About Us</a>
						</li>
						<li>
							<a href="services.html">Services</a>
						</li>
						<li>
							<a href="contact.html">Contact Us</a>
						</li>
						<li>
							<a href="product-details.html">Product Details</a>
						</li>
						<li>
							<a href="team.html">Team Member</a>
						</li>
						<li>
							<a href="checkout.html">Checkout</a>
						</li>
						<li>
							<a href="shopping-cart.html">Shopping cart</a>
						</li>
						<li>
							<a href="faq.html">FAQs</a>
						</li>
						<li>
							<a href="wishlist.html">Wishlist</a>
						</li>
						<li>
							<a href="404.html">404 Error</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Blog</a>
					<ul class="dropdown">
						<li>
							<a href="blog.html">Blog Right Sidebar</a>
						</li>
						<li>
							<a href="blog-left-sidebar.html">Blog Left Sidebar</a>
						</li>
						<li>
							<a href="blog-full-width.html">Blog Full Width</a>
						</li>
						<li>
							<a href="blog-details.html">Blog Details</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li><a href="#">Account</a>
					<ul class="dropdown">
						<li><a href="login-form.html">My Account</a></li>
						<li><a href="wishlist.html">My Wishlist</a></li>
						<li><a href="compare.html">Compare</a></li>
						<li><a href="checkout.html">Checkout</a></li>
						<li><a href="login.html">Log In</a></li>
						<li><a href="register.html">Create an account</a></li>
						<li><a href="#">close</a></li>
					</ul>
				</li>
			</ul>

		</nav>
	</div>