<?php include('main.php') ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Divisima | eCommerce Template</title>
  <meta charset="UTF-8">
  <meta name="description" content=" Divisima | eCommerce Template">
  <meta name="keywords" content="divisima, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="img/favicon.ico" rel="shortcut icon" />

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/flaticon.css" />
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <link rel="stylesheet" href="css/jquery-ui.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="stylesheet" href="css/style.css" />
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
  <!--
  <div id="preloder">
    <div class="loader"></div>
  </div> -->

  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">

            <a href="index.php" class="site-logo">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form">
              <input type="text" placeholder="Search on divisima ....">
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <a href="#">Sign</a> In or <a href="#">Create Account</a>
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span><?php
                      echo count($_SESSION['mycart']);

                  ?></span>
                </div>
                <a href="cart.php">Shopping Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">

        <ul class="main-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Women</a>
            <ul class="sub-menu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Formal Shoes</a></li>
              <li><a href="#">Boots</a></li>
              <li><a href="#">Flip Flops</a></li>
            </ul>
          </li>
          <li><a href="#">Men</a>
            <ul class="sub-menu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Formal Shoes</a></li>
              <li><a href="#">Boots</a></li>
              <li><a href="#">Flip Flops</a></li>
            </ul>
          </li>
          <li><a href="#">Jewelry
              <span class="new">New</span>
            </a></li>
          <li><a href="#">Shoes</a>
            <ul class="sub-menu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Formal Shoes</a></li>
              <li><a href="#">Boots</a></li>
              <li><a href="#">Flip Flops</a></li>
            </ul>
          </li>
          <li><a href="#">Pages</a>
            <ul class="sub-menu">
              <li><a href="./product.php">Product Page</a></li>
              <li><a href="./category.php">Category Page</a></li>
              <li><a href="./cart.php">Cart Page</a></li>
              <li><a href="./checkout.php">Checkout Page</a></li>
              <li><a href="./contact.php">Contact Page</a></li>
            </ul>
          </li>
          <li><a href="#">Category</a>
            <ul class="sub-menu">
              <?php foreach ($avada->getcategory() as $categ) {
              ?>
                <li><a href="#"><?php echo $categ['name'] ?></a></li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
