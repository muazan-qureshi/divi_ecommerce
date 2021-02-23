<?php include('header.php')


?>


<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>


<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Product</th>
                                    <th class="quy-th">Quantity</th>
                                    <th class="total-th">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($_SESSION['mycart'] as $c) {
                              foreach ($avada->getproduct_byid($c) as $data){
                                $img = json_decode($data['image']);
                                ?>
                                <tr>
                                    <td class="product-col">
                                        <img src="../admin/uploads/products/<?php echo $img[0] ?>" alt="">
                                        <div class="pc-title">
                                            <h4><?php echo $data['name'] ?></h4>
                                            <p>PKR <?php echo number_format($data['saleprice']) ?></p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-col">
                                        <h4>$45.90</h4>
                                    </td>
                                </tr>
                                <?php  }
                              }
                                 ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Total <span>$99.90</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">
                <form class="promo-code-form">
                    <input type="text" placeholder="Enter promo code">
                    <button>Submit</button>
                </form>
                <a href="" class="site-btn">Proceed to checkout</a>
                <a href="" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>


<section class="related-product-section">
    <div class="container">
        <div class="section-title text-uppercase">
            <h2>Continue Shopping</h2>
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
</section>

<?php
include('footer.php')
?>
