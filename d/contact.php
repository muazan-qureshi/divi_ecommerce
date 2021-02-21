<?php include('header.php');
$avada->getquery();
?>
<div class="page-top-info">
    <div class="container">
        <h4>Contact</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Contact</a>
        </div>
    </div>
</div>


<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 contact-info">
                <h3>Get in touch</h3>
                <p>Progressive Center, suite # 202-203, 30-A Shahrah-e-Faisal, Block 6 PECHS, Karachi, Karachi City, Sindh 75400</p>
                <p>+92 301 030 1642</p>
                <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bf3f4e8eff2f5fcdbf8f4f5effaf8efb5f8f4f6">[email&#160;protected]</a></p>
                <div class="contact-social">
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <form class="contact-form" method="POST">
                    <input type="text" name="name" placeholder="Your name" required>
                    <input type="text" name="email" placeholder="Your e-mail" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea placeholder="Message" name="message" required></textarea>
                    <button class="site-btn" name="send_btn" type="submit">SEND NOW</button>
                </form>
            </div>
        </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.017006244604!2d67.072209415308!3d24.86326875126763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33ea3db108f41%3A0x42acc4507358b160!2sAptech%20Computer%20Education%2C%20Shahrah%20e%20Faisal%20Center!5e0!3m2!1sen!2s!4v1613835538845!5m2!1sen!2s" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
</section>


<section class="related-product-section spad">
    <div class="container">
        <div class="section-title">
            <h2>Your Favorites</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="./img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/5.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/9.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="./img/product/1.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Flamboyant Pink Top </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include('footer.php');
?>
