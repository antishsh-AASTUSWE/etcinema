
<div class="card">
  <div class="card-body">

    <h5 class="card-title">Add Showtime</h5>
   
    <?php echo form_open('staff/add_showtime') ?>

    <form>
           <table class="table table-sm">
            <thead>
              <tr>
            <th scope="col">Movie</th>
            <th scope="col">Cinema</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            </tr>
            </thead>
            <tbody>
              <td> 
                  
    <div class="form-group">
     
      <select class="form-control form-control-rounded" name="movie" id="input-6">
        
<option disabled selected value>Please Choose Movie</option>
        <?php
        if(isset($movie)){
        foreach ($movie as $m) {
          echo "<option value='$m[movie_id]'>$m[mov_name] </option>";
        }}
        ?>
      </select>
      <div class="text-danger">
    <?php echo form_error('movie'); ?>
    </div> 
    </div>
              </td>
              <td>
              <div class="form-group">
     
     <select class="form-control form-control-rounded" name="cinema" id="input-6">
       
<option disabled selected value>Please Choose Cinema</option>
       <?php
       if(isset($cinema)){
       foreach ($cinema as $c) {
         echo "<option value='$c[cinema_id]'>$c[cinema_name] </option>";
       }}
       ?>
     </select>
     <div class="text-danger">
   <?php echo form_error('cinema'); ?>
   </div> 
   </div>
              </td>
              <td>
              <div class="form-group">
    <input type="date" name="date" max="3000-12-31" placeholder="Select Date"
    min="1000-01-01" class="form-control">
    <div class="text-danger">
<?php echo form_error('date'); ?>
</div> 
</div>
              </td>
              <td>

              <div class="form-group">
  <input class="form-control" name="time" type="time" value="08:00 am" id="example-time-input">
  <div class="text-danger">
<?php echo form_error('time'); ?>
</div> 
</div>
              </td>
              
            </tbody>
          </table>
          <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Showtime</button>
        </div>
      </div>
    </form>


    </div>

    

  </div>

<?php if(isset($showtime)){ ?>
<div class="card">
  <div class="card-body">
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
    <th scope="col">Edit/Delete</th>

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
              <td><a href="<?php echo base_url(); ?>staff/edit_showtime/<?= $s['show_id'] ?>" class="btn btn-light btn-round px-5">edit</a><a href="<?php echo base_url(); ?>staff/delete_showtime/<?= $s['show_id'] ?>" class="btn btn-light btn-round px-5 ml-1">Delete</a></td>
             
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
          <?php } else{
        echo 'NO Showtime found'  ;
        }
              ?>  