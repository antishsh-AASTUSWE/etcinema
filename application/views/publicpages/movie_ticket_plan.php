<!-- ==========Window-Warning-Section========== -->
<section class="window-warning inActive">
    <div class="lay"></div>
    <div class="warning-item">
        <h6 class="subtitle">Welcome! </h6>
        <h4 class="title">Select Your Seats</h4>
        <div class="thumb">
            <img src="<?php echo base_url() ?>publicassets/images/movie/seat-plan.png" alt="movie">
        </div>
        <a href="<?php echo base_url(); ?>publicpages/movie_seat_plan" class="custom-button seatPlanButton">Seat Plans<i class="fas fa-angle-right"></i></a>
    </div>
</section>
<!-- ==========Window-Warning-Section========== -->

<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img" data-background="<?php echo base_url() ?>assets/poster/<?= $movie_detail['mov_poster']; ?>">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content">
                <h3 class="title"><?= $movie_detail['mov_name']; ?></h3>
                <div class="tags">
                    <a href="#0"><?= $movie_detail['mov_language']; ?></a>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Book-Section========== -->
<section class="book-section bg-one">
    <div class="container">
        <form class="ticket-search-form two">

            <div class="form-group">
                <div class="thumb">
                    <img src="<?php echo base_url() ?>publicassets/images/ticket/date.png" alt="ticket">
                </div>
                <span class="type">date</span>
                <select class="select-bar">
                    <option value="26-12-19">23/10/2020</option>
                    <option value="26-12-19">24/10/2020</option>
                    <option value="26-12-19">25/10/2020</option>
                    <option value="26-12-19">26/10/2020</option>
                </select>
            </div>
            <div class="form-group">
                <div class="thumb">
                    <img src="<?php echo base_url() ?>publicassets/images/ticket/cinema.png" alt="ticket">
                </div>
                <span class="type">cinema</span>
                <select class="select-bar">
                    <option value="Awaken">Awaken</option>
                    <option value="Venus">Venus</option>
                    <option value="wanted">wanted</option>
                    <option value="joker">joker</option>
                    <option value="fid">fid</option>
                    <option value="kidio">kidio</option>
                    <option value="mottus">mottus</option>
                </select>
            </div>

        </form>
    </div>
</section>
<!-- ==========Book-Section========== -->

<!-- ==========Movie-Section========== -->
<div class="ticket-plan-section padding-bottom padding-top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-5 mb-lg-0">
                <ul class="seat-plan-wrapper bg-five">
                    <?php foreach ($showtime_detail as $shd) : ?>
                        <li>
                            <div class="movie-name">
                                <div class="icons">
                                    <i class="far fa-heart"></i>
                                    <i class="fas fa-heart"></i>
                                </div>
                                <?= $shd['cinema_name']; ?>
                                <div class="location-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                            </div>

                            <div class="movie-schedule">
                                <div class="item">
                                <a href="<?php echo base_url(); ?>publicpages/movie_seat_plan/<?= $shd['show_id'] ?>" class="name"> <?= $shd['show_time']; ?></a>
                                </div>
                            </div>
                            
                        </li>
                    <?php endforeach; ?>
                    <?= $shd['show_id'] ?>
                </ul>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="<?php echo base_url() ?>publicassets/images/sidebar/banner/banner03.jpg" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==========Movie-Section========== -->