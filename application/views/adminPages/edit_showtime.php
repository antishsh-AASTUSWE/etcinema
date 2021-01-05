<?php if(isset($records)){ ?>
    <?php foreach( $records as $r) { ?>
<div class="card">
  <div class="card-body">

    <h5 class="card-title">Edit Showtime</h5>
    
    <?php echo form_open("admin/update_showtime/{$r['show_id']}")?>

    
    <div class="form-group">
    <label for="input-6">Movie</label>
     <select class="form-control form-control-rounded" name="movie" id="input-6">
       
<option disabled selected value><?php echo $r['mov_name']; ?></option>
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
   <div class="form-group">
   <label for="input-6">Cinema</label>
     <select class="form-control form-control-rounded" name="cinema"  id="input-6">
       
<option disabled selected value><?php echo $r['cinema_name']; ?></option>
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
   <div class="form-group">
   <label for="input-6">Show Date</label>
    <input type="date" name="date" max="3000-12-31" value="<?php echo $r['show_date']; ?>" placeholder="Select Date"
    min="1000-01-01" class="form-control">
    <div class="text-danger">
<?php echo form_error('date'); ?>
</div> 
</div>
<div class="form-group">
<label for="input-6">Showtime</label>
  <input class="form-control" name="time" type="time" value="<?php echo $r['show_time']; ?>" id="example-time-input">
  <div class="text-danger">
<?php echo form_error('time'); ?>
</div> 
</div>

      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Edit Showtime</button>
          <a href="<?php echo base_url(); ?>admin/showtime" class="btn btn-light btn-round px-5">Cancel</a>
        </div>
      </div>
    </div>

    </form>


  </div>



    <?php }} ?>