
<?php if(isset($booking)){ ?>
<div class="card">

  <div class="card-body">
    <h5 class="card-title">Booked Movies</h5>
    <div class="table-responsive">
      <table class="table table-striped" id="mydatatable">
        <thead>
          <tr>
      <th scope="col">ID</th>
      <th scope="col">User</th>
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
              <td><?= $c['username']; ?></td>
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
          <?php }else { ?>
              <div class="card">
              <div class="card-body">
             NO Data found!
              </div>
          </div>
        <?php  }?>
