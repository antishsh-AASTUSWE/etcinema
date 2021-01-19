<div class="card">
  <div class="card-header">Showtime Report
    <div class="card-action">
      <div class="dropdown">
        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/daily_showtime">Today's Showtime</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/weekly_showtime">Weekly Showtime</a>
          <a class="dropdown-item" href="<?php echo base_url() ?>admin/monthly_showtime">Mothly Showtime</a>
          <div class="dropdown-divider"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <?php if (isset($showtime)) { ?>

      <h5 class="card-title">Showtimes</h5>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Movie</th>
              <th scope="col">Cinima</th>
              <th scope="col">date</th>
              <th scope="col">Time</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($showtime as $s) : ?>
              <tr>
                <td><?= $s['show_id']; ?></td>
                <td><?= $s['mov_name']; ?></td>
                <td><?= $s['cinema_name']; ?></td>
                <td><?= $s['show_date']; ?></td>
                <td><?= $s['show_time']; ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a href="<?php echo base_url(); ?>showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>

      </div>


    <?php
    } else if (isset($daily)) { ?>

      <h5 class="card-title">Today's Showtimes</h5>
      <div class="table-responsive">

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Movie</th>
              <th scope="col">Cinima</th>
              <th scope="col">date</th>
              <th scope="col">Time</th>


            </tr>
          </thead>
          <tbody>

            <?php foreach ($daily as $s) : ?>
              <tr>
                <td><?= $s['show_id']; ?></td>
                <td><?= $s['mov_name']; ?></td>
                <td><?= $s['cinema_name']; ?></td>
                <td><?= $s['show_date']; ?></td>
                <td><?= $s['show_time']; ?></td>


              </tr>

            <?php endforeach; ?>
          </tbody>

        </table>
        <a href="<?php echo base_url(); ?>daily_showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
      </div>


    <?php
    } else if (isset($weekly)) { ?>

      <h5 class="card-title">Weekly Showtimes</h5>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Movie</th>
              <th scope="col">Cinima</th>
              <th scope="col">date</th>
              <th scope="col">Time</th>


            </tr>
          </thead>
          <tbody>

            <?php foreach ($weekly as $s) : ?>
              <tr>
                <td><?= $s['show_id']; ?></td>
                <td><?= $s['mov_name']; ?></td>
                <td><?= $s['cinema_name']; ?></td>
                <td><?= $s['show_date']; ?></td>
                <td><?= $s['show_time']; ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a href="<?php echo base_url(); ?>weekly_showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
      </div>


    <?php } else if (isset($monthly)) { ?>

      <h5 class="card-title">Monthly Showtimes</h5>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Movie</th>
              <th scope="col">Cinima</th>
              <th scope="col">date</th>
              <th scope="col">Time</th>

            </tr>
          </thead>
          <tbody>

            <?php foreach ($monthly as $s) : ?>
              <tr>
                <td><?= $s['show_id']; ?></td>
                <td><?= $s['mov_name']; ?></td>
                <td><?= $s['cinema_name']; ?></td>
                <td><?= $s['show_date']; ?></td>
                <td><?= $s['show_time']; ?></td>

              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a href="<?php echo base_url(); ?>monthly_showtime_pdfdetails" class="btn btn-light btn-round px-5 ml-1">View in PDF</a>
      </div>


    <?php
    } else {
      echo 'NO Data Found!';
    }


    ?>

  </div>

</div>