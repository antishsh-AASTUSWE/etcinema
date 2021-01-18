<!-- ==========Banner-Section========== -->
<section class="details-banner hero-area bg_img seat-plan-banner" data-background="<?php echo base_url() ?>assets/poster/<?= $showtime['mov_poster']; ?>">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-content style-two">
                <h3 class="title"><?= $showtime['mov_name']; ?> </h3>
                <div class="tags">
                    <a href="#0"> <?= $showtime['cinema_name']; ?> </a>
                    <a href="#0">English - 2D</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->
<?php echo validation_errors(); ?>

<?php echo form_open("movie_checkout/{$showtime['show_id']}", array('onsubmit' => 'return validateCheckBox();')) ?>
<!-- ==========Page-Title========== -->
<section class="page-title bg-one">
    <div class="container">
        <div class="page-title-area">
            <div class="item md-order-1">
                <a href="<?php echo base_url(); ?>movie_ticket_plan/<?= $showtime['movie_id'] ?>" class="custom-button back-button">
                    <i class="flaticon-double-right-arrows-angles"></i>back
                </a>

            </div>
            <div class="item date-item">
                <span class="date "><?= $showtime['show_date']; ?></span>
                <span class="date "><?= $showtime['show_time']; ?></span>

            </div>
            <div class="item">

                <h5 class="title" id="timer"></h5>
                <p>Mins Left</p>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page-Title========== -->

<!-- ==========Movie-Section========== -->
<div class="seat-plan-section padding-bottom padding-top">
    <div class="container">
        <div class="screen-area">
            <h4 class="screen">screen</h4>
            <div class="screen-thumb">
                <img src="<?php echo base_url() ?>publicassets/images/movie/screen-thumb.png" alt="movie">
            </div>
            <h5 class="subtitle">seats</h5>
            <div class="screen-wrapper">
                <ul class="seat-area">
                    <?php

                    if (empty($seat)) {
                        for ($i = 1; $i < $seatrow['row']; $i++) {
                    ?>
                            <li class="seat-line">
                                <span></span>
                                <ul class="seat--area">
                                    <?php

                                    for ($j = 1; $j < $seatrow['col']; $j++) { ?>

                                        <li class="front-seat">
                                            <ul>
                                                <li class="single-seat">

                                                    <label class='checkbox'>

                                                        <input type="checkbox" name=<?= 'seat' . $i . $j; ?> hidden id=<?= $i . $j; ?> value='ch.<?= $i . $j; ?>' onclick="myFunction(this.id)">
                                                        <img id=<?= '1img' . $i . $j; ?> style="display:block" src="<?php echo base_url() ?>publicassets/images/movie/seat01.png" alt="seat">
                                                        <img id=<?= '2img' . $i . $j; ?> style="display:none" src="<?php echo base_url() ?>publicassets/images/movie/seat01-booked.png" alt="seat">
                                                    </label>

                                                </li>
                                            </ul>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                                <span></span>
                            </li>
                        <?php }
                    } else {
                        $t = 0;
                        $seats = [];
                        $t = $seatrow['col'] * $seatrow['row'];


                        for ($i = 1; $i < $seatrow['row']; $i++) {
                            for ($j = 1; $j < $seatrow['col']; $j++) {
                                $set = (int)$i . '' . $j;
                                $seats[$set] = "0";
                            }
                        }

                        foreach ($seat as $row) {
                            $pnr = $row['seat'];
                            $seats[$pnr] = 1;
                        }
                        for ($a = 1; $a < $seatrow['row']; $a++) {
                        ?>
                            <li class="seat-line">
                                <span></span>
                                <ul class="seat--area">
                                    <?php

                                    for ($b = 1; $b < $seatrow['col']; $b++) { ?>
                                        <li class="front-seat">
                                            <ul>
                                                <li class="single-seat">
                                                    <?php
                                                    $se = $a . '' . $b;
                                                    $j = (int)$se;
                                                    if ($seats[$j] == 1) {
                                                    ?> <label class='checkbox'>

                                                            <input type="checkbox" name=<?= 'seat' . $se; ?> hidden disabled id=<?= $se; ?> value='ch.<?= $se; ?>' onclick="myFunction(this.id)">
                                                            <img id=<?= '1img' . $se; ?> style="display:none" src="<?php echo base_url() ?>publicassets/images/movie/seat01-free.png" alt="seat">
                                                            <img id=<?= '2img' . $se; ?> style="display:block" src="<?php echo base_url() ?>publicassets/images/movie/seat01-free.png" alt="seat">
                                                        </label>


                                                    <?php
                                                    } else { ?>


                                                        <label class='checkbox'>

                                                            <input type="checkbox" name=<?= 'seat' . $se; ?> hidden id=<?= $se; ?> value='ch.<?= $se; ?>' onclick="myFunction(this.id)">
                                                            <img id=<?= '1img' . $se; ?> style="display:block" src="<?php echo base_url() ?>publicassets/images/movie/seat01.png" alt="seat">
                                                            <img id=<?= '2img' . $se; ?> style="display:none" src="<?php echo base_url() ?>publicassets/images/movie/seat01-booked.png" alt="seat">
                                                        </label>



                                                    <?php }
                                                    ?>
                                                </li>
                                            </ul>
                                        </li>
                                    <?php
                                    } ?>
                                </ul>
                                <span></span>
                            </li>
                    <?php }
                    } ?>


                </ul>
            </div>
        </div>


        <div class="proceed-book bg_img" data-background="<?php echo base_url() ?>publicassets/images/movie/movie-bg-proceed.jpg">
            <div class="proceed-to-book">
                <div class="book-item">
                    <span><img src="<?php echo base_url() ?>publicassets/images/movie/seat01.png" alt="seat"></span>
                    <h3 class="title" id="demo">
                        <p>Free</p>
                    </h3>
                </div>
                <div class="book-item">
                    <span><img class="mx-auto" src="<?php echo base_url() ?>publicassets/images/movie/seat01-booked.png" alt="seat"></span>
                    <h3 class="title" id="demo">
                        <p>Selected</p>
                    </h3>

                </div>
                <div class="book-item">
                    <span><img src="<?php echo base_url() ?>publicassets/images/movie/seat01-free.png" alt="seat"></span>
                    <h3 class="title" id="demo">
                        <p>booked</p>
                    </h3>

                </div>

                <div class="book-item">
                    <span></span>
                    <input type="text" hidden name="price" value="<?= $showtime['show_id']; ?>">

                </div>
                <div class="book-item">
                    <input type="submit" class="custom-button">

                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- ==========Movie-Section========== -->
<!-- 
<script>
    function myFunction() {
        var row = JSON.parse(`<?php echo $seatrow['row']; ?>`);
        var col = JSON.parse(`<?php echo $seatrow['col']; ?>`);
        for(i=1; i<row; i++){
                        for(j=1; j<col; j++)
                        {
        var checkBox = document.getElementById("Ch.11");
        if (checkBox.checked == true){
            document.getElementById("text").value=
        document.getElementById("Ch.11").value;
        } else {
    document.getElementById("text").value=null;
        }
    }}



}
</script> -->

<script>
    function myFunction(id) {


        var img1 = document.getElementById('1img' + id);
        var img2 = document.getElementById('2img' + id);

        var checkBox = document.getElementById(id);
        if (checkBox.checked == true) {
            // document.getElementById("seatSelected").innerHTML='#'+id;
            img2.style.display = "block";
            img1.style.display = "none";
        } else {
            img1.style.display = "block";
            img2.style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    function validateCheckBox() {
        var c = document.getElementsByTagName('input');
        for (var i = 0; i < c.length; i++) {
            if (c[i].type == 'checkbox') {
                if (c[i].checked) {
                    return true;
                }
            }
        }
        alert('Please select at least 1 ticket.');
        return false;
    }
</script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?= $showtime['show_date']; ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("timer").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>