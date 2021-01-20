<?php if (isset($booking)) { ?>
  <div class="card">
  <div class="card-header">All bookings
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url() ?>get_active_ticket">Cancel Ticket</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>postpond_ticket">Postpond_ticket</a>

                        </div>
                    </div>
                </div>
            </div>
    <div class="card-body">
      
      <div class="table-responsive">
        <table class="table table-striped" id="mydatatable">
          <thead>
            <tr>
              <th scope="col">ID</th>
              
              <th scope="col">Movie</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Cinema</th>


            </tr>
          </thead>
          <tbody>
            <?php foreach ($booking as $c) : ?>
              <tr>
                <td><?= $c['booking_id']; ?></td>
               
                <td><?= $c['mov_name']; ?></td>
                <td><?= $c['show_date']; ?></td>
                <td><?= $c['show_time']; ?></td>
                <td><?= $c['cinema_name']; ?></td>




              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php } 
else if (isset($active_booking)) { ?>
  <div class="card">
  <div class="card-header">Active Booking
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url() ?>get_active_ticket">Cancel Ticket</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>postpond_ticket">Postpond_ticket</a>

                        </div>
                    </div>
                </div>
            </div>
    <div class="card-body">
      
      <div class="table-responsive">
        <table class="table table-striped" id="mydatatable">
          <thead>
            <tr>
              <th scope="col">ID</th>
              
              <th scope="col">Movie</th>
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Cinema</th>
              <th scope="col">Cancel</th>


            </tr>
          </thead>
          <tbody>
            <?php foreach ($active_booking as $c) : ?>
              <tr>
                <td><?= $c['booking_id']; ?></td>
                
                <td><?= $c['mov_name']; ?></td>
                <td><?= $c['show_date']; ?></td>
                <td><?= $c['show_time']; ?></td>
                <td><?= $c['cinema_name']; ?></td>
                <td><a href="<?php echo base_url(); ?>cancel_ticket/<?= $c['booking_id'] ?>" class="btn btn-light btn-round px-5">Cancel</a>
                



              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>


<?php }
else { ?>
  <div class="card">
    <div class="card-body">
      NO Data found!
    </div>
  </div>
<?php  } ?>