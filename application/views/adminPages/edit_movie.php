<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Movie</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open("index.php/admin/update_movie/{$r['movie_id']}")?>
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
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['movie_id'];?>"  placeholder="id">
    <div class="text-danger">
    <?php echo form_error('movie_id'); ?>
    </div> 

    <div class="form-group">
    <label for="formGroupExampleInput">Movie Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $r['mov_name'];?>" name="name"  placeholder="Movie Title">
    <div class="text-danger">
    <?php echo form_error('mov_name'); ?>
    </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staring</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="staring"value="<?php echo $r['mov_starring'];?>" placeholder="Staring">
    <div class="text-danger">
    <?php echo form_error('mov_strarring'); ?>
    </div> 
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Poster</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster">value="<?php echo $r['mov_poster'];?>"
    <div class="text-danger">
    <?php echo form_error('poster'); ?>
    </div> 
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Trailor</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="trailor"value="<?php echo $r['mov_trailor'];?>" placeholder="Trailor">
    <div class="text-danger">
    <?php echo form_error('mov_trailor'); ?>
    </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plot"value="<?php echo $r['mov_plot'];?>"></textarea>
    <div class="text-danger">
    <?php echo form_error('mov_plot'); ?>
    </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Rating</label>
    <?php if(isset($rating)){ 
 ?>
    <select name="rating" value="<?php echo $r['rating'];?>"class="form-control">
    
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
    <input type="text" class="form-control" id="formGroupExampleInput2" name="running_time"value="<?php echo $r['mov_running_time'];?>" placeholder="running time">
    <div class="text-danger">
    <?php echo form_error('running_time'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Subtitle</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="subtitle" value="<?php echo $r['mov_subtitle'];?>" placeholder="subtitle">
    <div class="text-danger">
    <?php echo form_error('subtitle'); ?>
    </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Gener</label>
    <?php if(isset($gener)){ 
 ?>
    <select name="gener" value="<?php echo $r['gener'];?>" class="form-control" >
    
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
    <input placeholder="Select date" type="date" id="example" name="realse_date" value="<?php echo $r['mov_realse_date'];?>"class="form-control datepicker">
    <div class="text-danger">
    <?php echo form_error('realse_date'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Language</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="language" value="<?php echo $r['mov_language'];?>"placeholder="language">
    <div class="text-danger">
    <?php echo form_error('language'); ?>
    </div>  

 
  
<div class="form-group">
<input type="submit" value='save'>
 
</div>


</form>
</div>
</div>
  <?php }} ?>
      
