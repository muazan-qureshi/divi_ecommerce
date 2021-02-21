<?php include('header.php')

?>
<div class="page-top-info">
    <div class="container">
        <h4>CAtegory PAge</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Shop</a> /
        </div>
    </div>
</div>


<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="filter-widget">
                    <h2 class="fw-title">Categories</h2>
                    <ul class="category-menu">
                      <!-- Categories name along with counts  -->
                      <?php
                        foreach ($avada->categories_info() as $catlog) {

                       ?>
                        <li>
                          <a href="category.php?pcid=<?php echo $catlog['id'] ?>"><?php echo $catlog['categname'] ?><span><?php echo $catlog['pcid'] ?></span></a>
                        </li>
                        <?php
                      }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">

                    <!-- cards start here -->
                    <?php
                        foreach($avada->getproducts() as $pro)
                        {
                          $img = json_decode($pro['image']);

                    ?>

                    <div class="col-lg-4 col-sm-6">

                        <div class="product-item">
                            <div class="pi-pic">
                                <div class="tag-sale">ON SALE</div>
                                <img src="../admin/uploads/products/<?php echo $img[0]?>" alt="">
                                <div class="pi-links">
                                    <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                    <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                </div>
                            </div>
                            <a href="product.php">
                            <div class="pi-text">
                                <h6>PKR <?php echo number_format($pro['saleprice']) ?></h6>
                                <a href="product.php?gpid=<?php echo $pro['id'] ?>">
                                  <p><?php echo $pro['name'] ?></p>
                                </a>
                            </div>
                            </a>
                        </div>

                    </div>
                    <!-- cards end here -->

                    <?php
                      }
                     ?>

                    <div class="text-center w-100 pt-3">
                        <button class="site-btn sb-line sb-dark">LOAD MORE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('footer.php')
?>
