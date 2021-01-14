<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="<?php echo base_url() ?>publicassets/images/banner/banner01.jpg"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title  cd-headline clip"><span class="d-block">book your</span> movie
                <span class="color-theme cd-words-wrapper p-0 m-0">
                    <b class="is-visible">tickets</b>
                    <b>anywhere</b>
                    <b>anytime</b>
                </span>
            </h1>
            <p>Safe, secure, reliable ticketing.</p>
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
                
                    <form class="ticket-search-form" action="publicpages/search_movie" method="post">
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
                        <div class="form-group large">
                            <input type="text" list="movies" name="search" placeholder="Search fo Movies">            
                               <datalist id="movies" >

                               <?php 
                               if(isset($movie)){
                                   foreach ($movie as $m) : ?>

                                <option ><?= $m['mov_name']; ?></option>

                                <?php endforeach; }else?>
                                </datalist>
                                <div class="text-danger">
                        <?php echo form_error('search'); ?>
                    </div>
                  
                            
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
        <div class="tab">
            <div class="section-header-2">
                <div class="left">
                    <h2 class="title">Now showing</h2>
                    <p>Be sure not to miss these Movies today.</p>
                </div>
                
            </div>

            <div class="tab-area mb-30-none">
                <div class="tab-item active">
                    <div class="owl-carousel owl-theme tab-slider">
                    
                        <?php if(isset($nowshowing)){
                        
                        foreach ($nowshowing as $n) : ?>

                            <div class="item">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $n['movie_id'] ?>">
                                            <img src="<?php echo base_url() ?>assets/poster/<?= $n['mov_poster']; ?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0">
                                            <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $n['movie_id'] ?>"><?= $n['mov_name']; ?></a>
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
                        <?php endforeach; 
                        } else {
                            echo 'No data Found!';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Section========== -->

<!-- ==========Event-Section========== -->
<section class="movie-section padding-top padding-bottom">
    <div class="container">
        <div class="tab">
            <div class="section-header-2">
                <div class="left">
                    <h2 class="title">comming soon</h2>
                    <p>this movies cooming soon to our cinemas soon.</p>
                </div>
                
            </div>
            <div class="tab-area mb-30-none">
                <div class="tab-item active">
                    <div class="owl-carousel owl-theme tab-slider">
                        
                        <?php if(isset($commingsoon)){
                            foreach ($commingsoon as $c) : ?>

<div class="item">
    <div class="movie-grid">
        <div class="movie-thumb c-thumb">
            <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $c['movie_id'] ?>">
                <img src="<?php echo base_url() ?>assets/poster/<?= $c['mov_poster']; ?>" alt="movie">
            </a>
            <div class="event-date">
                                        <h6 class="date-title">
                                        <?php
                                                    $date = $c['mov_realse_date'];;
                                                    echo date('j', strtotime($date)); //July, 2017
                                                    ?>
                                        </h6>
                                        <span><?php $date = $c['mov_realse_date'];;
                                                    echo date('M', strtotime($date)); //July, 2017
                                                    ?></span>
                                    </div>
        </div>
        <div class="movie-content bg-one">
            <h5 class="title m-0">
                <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $c['movie_id'] ?>"><?= $c['mov_name']; ?></a>
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
<?php endforeach; 
} else {
    echo 'No data Found!';
}?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="movie-section padding-top padding-bottom">
    <div class="container">
        <div class="tab">
            <div class="section-header-2">
                <div class="left">
                    <h2 class="title">Trending</h2>
                    <p>This movies are top wached movies.</p>
                </div>
                
            </div>
            <div class="tab-area mb-30-none">
                <div class="tab-item active">
                    <div class="owl-carousel owl-theme tab-slider">
                        
                        <?php if(isset($trending)){
                        foreach ($trending as $c) : ?>

<div class="item">
    <div class="movie-grid">
        <div class="movie-thumb c-thumb">
            <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $c['movie_id'] ?>">
                <img src="<?php echo base_url() ?>assets/poster/<?= $c['mov_poster']; ?>" alt="movie">
            </a>
            <div class="event-date">
                                        <h6 class="date-title"><?= $c['gross']; ?></h6>
                                        <span>birr</span>
                                    </div>
        </div>
        <div class="movie-content bg-one">
            <h5 class="title m-0">
                <a href="<?php echo base_url(); ?>publicpages/movie_details/<?= $c['movie_id'] ?>"><?= $c['mov_name']; ?></a>
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
<?php endforeach; 
} else {
    echo 'No data Found!';
}?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Event-Section==========!-->

<!-- ==========Sports-Section========== -->
<!-- <section class="sports-section padding-top padding-bottom">
    <div class="container">
        <div class="tab">
            <div class="section-header-2">
                <div class="left">
                    <h2 class="title">sports</h2>
                    <p>Be sure not to miss these Sports today.</p>
                </div>
                <ul class="tab-menu">
                    <li class="active">
                        now showing
                    </li>
                    <li>
                        coming soon
                    </li>
                    <li>
                        exclusive
                    </li>
                </ul>
            </div>
            <div class="tab-area mb-30-none">
                <div class="tab-item active">
                    <div class="owl-carousel owl-theme tab-slider">
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports01.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">football league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports02.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world cricket league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports03.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">basket ball league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports04.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world badminton league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-item">
                    <div class="owl-carousel owl-theme tab-slider">
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports01.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">football league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports02.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world cricket league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports03.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">basket ball league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports04.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world badminton league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-item">
                    <div class="owl-carousel owl-theme tab-slider">
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports01.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">football league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports02.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world cricket league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports03.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">basket ball league tournament</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sports-grid">
                                <div class="movie-thumb c-thumb">
                                    <a href="#0">
                                        <img src="<?php echo base_url() ?>publicassets/images/sports/sports04.jpg" alt="sports">
                                    </a>
                                    <div class="event-date">
                                        <h6 class="date-title">28</h6>
                                        <span>Dec</span>
                                    </div>
                                </div>
                                <div class="movie-content bg-one">
                                    <h5 class="title m-0">
                                        <a href="#0">world badminton league 2020</a>
                                    </h5>
                                    <div class="movie-rating-percent">
                                        <span>327 Montague Street</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ==========Sports-Section========== -->