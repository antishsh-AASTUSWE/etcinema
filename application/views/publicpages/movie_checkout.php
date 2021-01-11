<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>publicassets/images/banner/banner04.jpg">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content style-two">
                <h3 class="title"><?= $showtime['mov_name'] ?></h3>
                <div class="tags">
                    <a href="#0"><?= $showtime['cinema_name'] ?></a>
                    <a href="#0">English </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Page-Title========== -->
<section class="page-title bg-one">
    <div class="container">
        <div class="page-title-area">
            <div class="item md-order-1">
                <a href="movie-ticket-plan.html" class="custom-button back-button">
                    <i class="flaticon-double-right-arrows-angles"></i>back
                </a>
            </div>
            <div class="item date-item">
                <span class="date">MON, SEP 09 2020</span>
                <select class="select-bar">
                    <option value="sc1">09:40</option>
                    <option value="sc2">13:45</option>
                    <option value="sc3">15:45</option>
                    <option value="sc4">19:50</option>
                </select>
            </div>
            <div class="item">
                <h5 class="title">05:00</h5>
                <p>Mins Left</p>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page-Title========== -->

<!-- ==========Movie-Section========== -->
<div class="movie-facility padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
                <div class="checkout-widget checkout-contact">
                    <h5 class="title">Promo Code </h5>
                    <form class="checkout-contact-form">
                        <div class="form-group">
                            <input type="text" placeholder="Please enter promo code">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Verify" class="custom-button">
                        </div>
                    </form>
                </div>
                <div class="checkout-widget checkout-card mb-0">
                    <h5 class="title">Payment Option </h5>
                    <ul class="payment-option">
                        <li id="test1" onclick="myFunction(this.id)">
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/cbe.png" alt="payment">
                                <span>Debit Card</span>
                            </a>
                        </li>
                        <li id="test2" onclick="myFunction(this.id)">
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/hellocash.jpg" alt="payment">
                                <span>Debit Card</span>
                            </a>
                        </li>
                        <li id="test3" onclick="myFunction(this.id)">
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/amole.jpg" alt="payment">
                                <span>Debit Card</span>
                            </a>
                        </li>
                        <li id="test4" onclick="myFunction(this.id)">
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/m-birr.jpg" alt="payment">
                                <span>Debit Card</span>
                            </a>
                        </li>
                    </ul>
                    <p class="notice">
                        By Clicking "PROCEED" you agree to the <a href="#0">terms and conditions</a>
                    </p>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="booking-summery bg-one">
                    <h4 class="title">booking summery</h4>
                    <ul>
                        <li>
                            <h6 class="subtitle"><?= $showtime['mov_name'] ?></h6>
                            <span class="info"><?= $showtime['mov_language'] ?></span>
                        </li>
                        <li>
                            <h6 class="subtitle"><span><?= $showtime['cinema_name'] ?></span></h6>
                            <div class="info"><span><?= $showtime['show_date'] ?></span> <span><?= $showtime['show_time'] ?></span></div>
                        </li>
                        <li>
                            <h6 class="subtitle mb-0">
                                <span>Selected Seats</span>
                            </h6>
                            <div class="info">
                                <?php if (isset($row)) {
                                    $t = 0;
                                    $t = $row['col'] * $row['row'];
                                }

                                for ($i = 11; $i < $t; $i++) {
                                    if (isset($_POST['seat' . $i])) {
                                        $seat_price = count(($_POST)) ?>

                                        <span><?= 'seat' . $i ?></span>

                                <?php }
                                } ?>
                            </div>
                        </li>
                        <li>
                            <h6 class="subtitle mb-0"><span>Tickets Price</span><span><?= ($seat_price - 1) * (int)$showtime['price'] ?></span></h6>
                        </li>
                    </ul>





                </div>
                <?php echo form_open("publicpages/movie_book") ?>
                
                                <?php if (isset($row)) {
                                    $t = 0;
                                    $t = $row['col'] * $row['row'];
                                }

                                for ($i = 11; $i < $t; $i++) {
                                    if (isset($_POST['seat' . $i])) {
                                        ?>
<input type="text"  name="<?= 'seat'.$i ?>" value="<?= $i ?>">
                                        
                                <?php }
                                } ?>



                
                <div class="proceed-area  text-center">
                    <h6 class="subtitle"><span>Amount Payable</span><span>$222</span></h6>
                    <input type="submit" class="custom-button" value="proceed">

                </div>
                <form>
            </div>

        </div>
    </div>
</div>
<!-- ==========Movie-Section========== -->
<script>
    function myFunction(id) {

        
            document.getElementById(id).className = "active";
       
    }
</script>