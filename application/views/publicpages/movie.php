<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="<?php echo base_url() ?>publicassets/images/banner/banner02.jpg"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title bold">get <span class="color-theme">movie</span> tickets</h1>
            <p>Buy movie tickets in advance, find movie times watch trailers, read movie reviews and much more</p>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Ticket-Search========== -->
<section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab bg_img" data-background="<?php echo base_url() ?>publicassets/images/ticket/ticket-bg01.jpg">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6 mb-20">
                    <div class="search-ticket-header">
                        <h6 class="category">welcome to Etcinema </h6>
                        <h3 class="title">what are you looking for</h3>
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <ul class="tab-menu ticket-tab-menu">
                        <li class="active">
                            <div class="tab-thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/ticket/ticket-tab01.png" alt="ticket">
                            </div>
                            <span>movie</span>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                
                    <form class="ticket-search-form" action="search_movie" method="post">
                    <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">Select Cinema</span>
                            <select class="select-bar" name="cinema">

                                <?php foreach ($cinema as $c) : ?>

                                    <option value="<?= $c['cinema_name']; ?>"><?= $c['cinema_name']; ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/ticket/cinema.png" alt="ticket">
                            </div>
                            <span class="type">Select Date</span>
                            <input type="date" name="date" placeholder="Search fo Movies">
                        </div>
                        
                        <div class="form-group large">
                            <input type="text" name="search" placeholder="Search fo Movies">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        
                        

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ==========Ticket-Search========== -->

<!-- ==========Movie-Section========== -->
<section class="movie-section padding-top padding-bottom">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            
            <div class="col-lg-9 mb-50 mb-lg-0">
                <div class="filter-tab tab">
                    <div class="filter-area">
                        <div class="filter-main">
                            <div class="left">
                                <div class="item">
                                    <span class="show">Show :</span>
                                    <select class="select-bar">
                                        <option value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="18">18</option>
                                        <option value="21">21</option>
                                        <option value="24">24</option>
                                        <option value="27">27</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="item">
                                    <span class="show">Sort By :</span>
                                    <form action="search_movie" method="post">
                                    <select class="select-bar" name="movie_group">
                                        <option value="showing">now showing</option>
                                        <option value="exclusive">exclusive</option>
                                        <option value="trending">trending</option>
                                        <option value="most-view">most view</option>
                                    </select>
                                    </form>
                                </div>
                            </div>
                            <ul class="grid-button tab-menu">
                                <li class="active">
                                    <i class="fas fa-th"></i>
                                </li>
                                <li>
                                    <i class="fas fa-bars"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-area">
                        <div class="tab-item active">
                            <div class="row mb-10 justify-content-center">
                                <?php foreach ($movie as $m) : ?>
                                    <div class="col-sm-6 col-lg-4">

                                        <div class="movie-grid">
                                            <div class="movie-thumb c-thumb">
                                                <a href="<?php echo base_url(); ?>movie_details/<?= $m['movie_id'] ?>">
                                                    <img src="<?php echo base_url() ?>assets/poster/<?= $m['mov_poster']; ?>" alt="movie">
                                                </a>
                                            </div>
                                            <div class="movie-content bg-one">
                                                <h5 class="title m-0">
                                                    <a href="<?php echo base_url(); ?>movie_details/<?= $m['movie_id'] ?>"><?= $m['mov_name']; ?></a>
                                                </h5>
                                                <ul class="movie-rating-percent">
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="<?php echo base_url() ?>publicassets/images/movie/tomato.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="<?php echo base_url() ?>publicassets/images/movie/cake.png" alt="movie">
                                                        </div>
                                                        <span class="content">88%</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class="tab-item">
                            <div class="movie-area mb-10">
                                <?php foreach ($movie as $m) : ?>
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $m['movie_id'] ?>" class="w-100 bg_img h-100" data-background="<?php echo base_url() ?>assets/poster/<?= $m['mov_poster']; ?>">
                                                <img class="d-sm-none" src="<?php echo base_url() ?>assets/poster/<?= $m['mov_poster']; ?>" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                                <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $m['movie_id'] ?>"><?= $m['mov_name']; ?></a>
                                            </h5>
                                            <p class="duration"><?= $m['mov_running_time']; ?></p>
                                            <div class="movie-tags">
                                                <a href="#0"><?= $m['mov_gener']; ?></a>
                                            </div>
                                            <div class="release">
                                                <span>Release Date : </span> <a href="#0"> <?= $m['mov_realse_date']; ?></a>
                                            </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="<?php echo base_url() ?>publicassets/images/movie/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="<?php echo base_url() ?>publicassets/images/movie/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>publicassets/images/icons/heart.png" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="#0">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>publicassets/images/icons/book.png" alt="icons">
                                                            </div>
                                                            <span>book ticket</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        <a href="<?php echo $m['mov_trailor']; ?>" class="popup-video">
                                                            <div class="thumb">
                                                                <img src="<?php echo base_url() ?>publicassets/images/icons/play-button.png" alt="icons">
                                                            </div>
                                                            <span>watch trailer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <div class="pagination-area text-center">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Section========== -->