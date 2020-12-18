
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Showtime</h5>
          <div class="table-responsive">
          <?php echo form_open('index.php/admin/create_showtime')?>
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
           <table class="table table-sm">
            <thead>
              <tr>
            <th scope="col">Movie</th>
            <th scope="col">Cinema</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
              <td> 
              <div class="form-group">

<?php if(isset($movies)){ ?>
<select name="movie" class="form-control">
<option disabled selected value>Please Choose Movie</option>
<?php foreach( $movies as $y) { ?>
<?php echo "<option>".$y->mov_name."</option>";}}?>
</select>

<div class="text-danger">
<?php echo form_error('movie'); ?>
</div> 
</div>
              </td>
              <td>
              <div class="form-group">
    
    <?php if(isset($cinema)){ ?>
  <select name="cinema" class="form-control">
    <option disabled selected value>Please Choose Cinima</option>
    <?php foreach( $cinema as $c) { ?>
     <?php echo "<option>".$c->cinema_name."</option>";}} ?>
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
              <td>
              <div class="form-group">
  <input class="form-control" name="price" type="curency"  id="example-time-input">
  <div class="text-danger">
<?php echo form_error('price'); ?>
</div> 
  </div>
              </td>
            </tbody>
          </table>
          <div class="form-group">
<button type="submit" class="btn btn-outline-secondary">Add</button>
</div>
    </form>
        </div>
        </div>
      </div>
    