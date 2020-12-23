<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Movie</h5>

<?php echo form_open_multipart('index.php/admin/create_movie')?>
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
    <label for="formGroupExampleInput">Movie Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name"  placeholder="Movie Title">
    <div class="text-danger">
    <?php echo form_error('name'); ?>
    </div>
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staring</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="staring" placeholder="Staring">
    <div class="text-danger">
    <?php echo form_error('staring'); ?>
    </div>
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Poster</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster">
    <div class="text-danger">
    <?php echo form_error('poster'); ?>
    </div>
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Trailor</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="trailor" placeholder="Trailor">
    <div class="text-danger">
    <?php echo form_error('trailor'); ?>
    </div> 
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plot"></textarea>
    <div class="text-danger">
    <?php echo form_error('plot'); ?>
    </div> 
</div>
<div class="form-group">
  
    <label for="formGroupExampleInput2">Rating</label>
    <?php if(isset($rating)){ 
 ?>
    <select name="rating" class="form-control">
       
<option disabled selected value>Please Choose Rating</option>
      
      <?php foreach( $rating as $y) { ?>
       <?php echo "<option>".$y->rating."</option>";}} ?>
    </select>
    <div class="text-danger">
    <?php echo form_error('rating'); ?>
    </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Running Time</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="running_time" placeholder="running time">
    <div class="text-danger">
    <?php echo form_error('running_time'); ?>
    </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Subtitle</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="subtitle" placeholder="subtitle">
    <div class="text-danger">
    <?php echo form_error('subtitle'); ?>
    </div>  
</div>

<div class="form-group">
<label for="formGroupExampleInput2">Gener</label>
<?php if(isset($gener)){ 
 ?>
    <select name="gener" class="form-control">
      
<option disabled selected value>Please Choose Gener</option>
      <?php foreach( $gener as $x) { ?>
       <?php echo "<option>".$x->gener."</option>";}} ?>
    </select>
    <div class="text-danger">
    <?php echo form_error('gener'); ?>
    </div> 
</div>

<div class="form-group">
    <label for="formGroupExampleInput2">Realse Date</label>
    <input placeholder="Select date" type="date" id="example" name="realse_date" class="form-control datepicker">
    <div class="text-danger">
    <?php echo form_error('realse_date'); ?>
    </div>
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Language</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="language" placeholder="language">
    <div class="text-danger">
    <?php echo form_error('language'); ?>
    </div>
</div>
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
              
</div> 
</div>
 