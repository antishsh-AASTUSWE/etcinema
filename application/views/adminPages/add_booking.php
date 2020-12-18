<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Booking</h5>

<?php echo form_open('index.php/admin/create_booking')?>
<?php if ($message = $this->session->flashdata('message')): ?>
			<div class="row">
				<div class="col-md-6">
					<div class="alert alert-success alert-dismissble">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<?php echo $message; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
<form>
<div class="form-group">
  
  <label for="formGroupExampleInput2">Showtime</label>
  <?php if(isset($showtime)){ 
?>
  <select name="showtime" class="form-control">
    
<option disabled selected value>Please Choose Showtime</option>
    
    <?php foreach( $showtime as $y) { ?>
     <?php echo "<option>".$y->mov_id."&nbsp;".$y->cinema_id."&nbsp;".$y->show_date.
     "&nbsp;".$y->show_time."&nbsp;".$y->Price."</option>";}} ?>
  </select>
  <div class="text-danger">
  <?php echo form_error('showtime'); ?>
  </div>  
</div>
<div class="form-group">
  
  <label for="formGroupExampleInput2">User</label>
  <?php if(isset($user)){ 
?>
  <select name="user" class="form-control">
    
<option disabled selected value>Please Choose User</option>
    
    <?php foreach( $User as $y) { ?>
     <?php echo "<option>".$y->name."</option>";}} ?>
  </select>
  <div class="text-danger">
  <?php echo form_error('user'); ?>
  </div>  
</div>
<div class="form-group">
  
  <label for="formGroupExampleInput2">Seat</label>
  <?php if(isset($seat)){ 
?>
  <select name="seat" class="form-control">
    
<option disabled selected value>Please Choose Seat</option>
    
    <?php foreach( $Seat as $y) { ?>
     <?php echo "<option>".$y->seat_id."</option>";}} ?>
  </select>
  <div class="text-danger">
  <?php echo form_error('seat'); ?>
  </div>  
</div>

  <div class="form-group">
    <label for="formGroupExampleInput">Ticket</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="ticket"  placeholder="Ticket">
    <div class="text-danger">
    <?php echo form_error('Ticket'); ?>
    </div>   
</div> 
<div class="form-group">
  
  <label for="formGroupExampleInput2">Status</label>
  
  <select name="status" class="form-control">
    
<option disabled selected value>Please Choose Seat</option>
    
    <option>Active</option>
    <option>Pending</option>
    <option>Cancelled</option>
  </select>
  <div class="text-danger">
  <?php echo form_error('status'); ?>
  </div>  
</div>
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
              
</div> 
</div>
 