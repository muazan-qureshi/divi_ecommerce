<?php include('header.php');

?>




<div class="page-top-info">
    <div class="container">
        <h4>Category Page</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">
            </a>
        </div>
    </div>
</div>


<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="./category.html"> &lt;&lt; Back to Category</a>
        </div>
        <div class="row">
            <!-- Start here -->
            <?php
            $a = $_GET['gpid'];
            foreach ($avada->getproduct_byid($a) as $pro){
              $img = json_decode($pro['image']);
              $count = count(json_decode($pro['image']));
             ?>
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-img" src="../admin/uploads/products/<?php echo $img[0] ?>" alt="">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                      <?php
                        for ($i=0; $i < $count ; $i++) {
                          echo('<div class="pt active"><img src="../admin/uploads/products/'.$img[$i].'" alt=""></div>');
                        }
                       ?>
<!-- data-imgbigurl="img/single-product/1.jpg" -->
                        <!-- <div class="pt" data-imgbigurl="img/single-product/2.jpg"><img src="img/single-product/thumb-2.jpg" alt=""></div>
                        <div class="pt" data-imgbigurl="img/single-product/3.jpg"><img src="img/single-product/thumb-3.jpg" alt=""></div>
                        <div class="pt" data-imgbigurl="img/single-product/4.jpg"><img src="img/single-product/thumb-4.jpg" alt=""></div> -->
                    </div>
                </div>
            </div>

          <?php } ?>
            <!-- For all images of product details -->


<!-- start here -->
<?php
  $a = $_GET['gpid'];
  foreach ($avada->getproduct_byid($a) as $pro) {

 ?>

            <div class="col-lg-6 product-details">
                <h2 class="p-title"><?php echo $pro['name'] ?></h2>
                <h3 class="p-price">PKR <?php echo number_format($pro['saleprice']) ?></h3>
                <h4 class="p-stock">Available: <span>In Stock</span></h4>
                <div class="p-rating">
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o fa-fade"></i>
                </div>
                <div class="p-review">
                    <a href="">3 reviews</a>|<a href="">Add your review</a>
                </div>
                <!-- <div class="fw-size-choose">
                    <p>Size</p>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xs-size">
                        <label for="xs-size">32</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="s-size">
                        <label for="s-size">34</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="m-size" checked="">
                        <label for="m-size">36</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="l-size">
                        <label for="l-size">38</label>
                    </div>
                    <div class="sc-item disable">
                        <input type="radio" name="sc" id="xl-size" disabled>
                        <label for="xl-size">40</label>
                    </div>
                    <div class="sc-item">
                        <input type="radio" name="sc" id="xxl-size">
                        <label for="xxl-size">42</label>
                    </div>
                </div> -->
                <div class="quantity">
                    <p>Quantity</p>
                    <div class="pro-qty"><input type="text" value="1"></div>
                </div>
                <a href="#" class="site-btn">SHOP NOW</a>
                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <?php
                                echo $pro['description'];
                                 ?>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="./img/cards.png" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingThree">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="panel-body">
                                <h4>7 Days Returns</h4>
                                <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social-sharing">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-pinterest"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
          <?php } ?>
          <!-- loop end here -->
            <!-- End Here -->

            <hr>
            <hr>

        </div>
    </div>
</section>

<!-- Owl Sildeer start  -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">

          <?php
          foreach ($avada->getproducts() as $pro) {
            $img = json_decode($pro['image']);
          ?>
            <div class="product-item">
                <div class="pi-pic">
                    <img src="../admin/uploads/products/<?php echo $img[0] ?>" alt="">
                    <div class="pi-links">
                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                    </div>
                </div>
                <div class="pi-text">
                    <h6>PKR <?php echo number_format($pro['saleprice']) ?></h6>
                    <a href="product.php?gpid=<?php echo $pro['id'] ?>">
                      <p><?php echo $pro['name'] ?></p>
                    </a>
                </div>
            </div>
          <?php } ?>
        </div>

    </div>
    </div>
</section>
<?php include('footer.php');

?>
