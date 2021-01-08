<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>publicassets/images/banner/banner04.jpg">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content style-two">
                <h3 class="title">Venus</h3>
                <div class="tags">
                    <a href="#0">City Walk</a>
                    <a href="#0">English - 2D</a>
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
                <div class="checkout-widget d-flex flex-wrap align-items-center justify-cotent-between">
                    <div class="title-area">
                        <h5 class="title">Already a Etcinema Member?</h5>
                        <p>Sign in to earn points and make booking easier!</p>
                    </div>
                    <a href="#0" class="sign-in-area">
                        <i class="fas fa-user"></i><span>Sign in</span>
                    </a>
                </div>
                <div class="checkout-widget checkout-contact">
                    <h5 class="title">Share your Contact Details </h5>
                    <form class="checkout-contact-form">
                        <div class="form-group">
                            <input type="text" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your Mail">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Enter your Phone Number ">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Continue" class="custom-button">
                        </div>
                    </form>
                </div>
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
                        <li class="active">
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/card.png" alt="payment">
                                <span>Credit Card</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/card.png" alt="payment">
                                <span>Debit Card</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/paypal.png" alt="payment">
                                <span>paypal</span>
                            </a>
                        </li>
                    </ul>
                    <h6 class="subtitle">Enter Your Card Details </h6>
                    <form class="payment-card-form">
                        <div class="form-group w-100">
                            <label for="card1">Card Details</label>
                            <input type="text" id="card1">
                            <div class="right-icon">
                                <i class="flaticon-lock"></i>
                            </div>
                        </div>
                        <div class="form-group w-100">
                            <label for="card2"> Name on the Card</label>
                            <input type="text" id="card2">
                        </div>
                        <div class="form-group">
                            <label for="card3">Expiration</label>
                            <input type="text" id="card3" placeholder="MM/YY">
                        </div>
                        <div class="form-group">
                            <label for="card4">CVV</label>
                            <input type="text" id="card4" placeholder="CVV">
                        </div>
                        <div class="form-group check-group">
                            <input id="card5" type="checkbox" checked>
                            <label for="card5">
                                <span class="title">QuickPay</span>
                                <span class="info">Save this card information to my Etcinema account and make faster payments.</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="custom-button" value="make payment">
                        </div>
                    </form>
                    <p class="notice">
                        By Clicking "Make Payment" you agree to the <a href="#0">terms and conditions</a>
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
                            <h6 class="subtitle mb-0"><span>Tickets Price</span><span><?= $showtime['price'] ?></span></h6>
                        </li>
                    </ul>
                    
 
                    
                   
                   
                </div>
                <?php echo form_open("publicpages/movie_book")?>
                <input type="text" hidden name="show" value="<?= $showtime['show_id'] ?>"> 
                    <input type="text" hidden name="user" value="<?php echo $this->session->userdata('user_id'); ?>"> 
                    <?php
                    if(isset($seat)){ ?>
                                    <input type="text" hidden name="seat" value="<?php echo $seat; ?>"> 
                   <?php }?>
                <div class="proceed-area  text-center">
                    <h6 class="subtitle"><span>Amount Payable</span><span>$222</span></h6>
                    <input type="submit" class="custom-button" value="proceed" >
                   
                </div>
                <form>
            </div>
            
        </div>
    </div>
</div>
<!-- ==========Movie-Section========== -->