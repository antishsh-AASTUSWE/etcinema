<?php if(isset($records)){ ?>
    <?php foreach( $records as $r) { ?>
      
<div class="card mt-3">
  <div class="card-body">
    <div class="card-title">Edit Movie</div>
    <hr>

   
    <?php echo form_open("staff/update_movie/{$r['movie_id']}")?>
    <div class="form-group">
      <label for="input-6">Title</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_name'];?>" name="title" id="input-6" placeholder="Enter Movie Title">
      <div class="text-danger">
    <?php echo form_error('title'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="input-6">Movie Plot</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_plot'];?>" name="plot" id="input-6" placeholder="Enter Movie Plot">
      <div class="text-danger">
    <?php echo form_error('plot'); ?>
    </div> 
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Running Time</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_running_time'];?>" name="runningtime">
      <div class="text-danger">
    <?php echo form_error('runningtime'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Released Date</label>
      <input type="text" class="form-control form-control-rounded"  value="<?php echo $r['mov_realse_date'];?>" name="realsedate" id="datepicker">
      <div class="text-danger">
    <?php echo form_error('realsedate'); ?>
    </div> 
    </div>

    <div class="form-group">
      <label for="exampleInputEmail1">Tailer</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_trailor'];?>" name="trailor">
      <div class="text-danger">
    <?php echo form_error('trailor'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Staring</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_starring'];?>" name="staring">
      <div class="text-danger">
    <?php echo form_error('staring'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Language</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_language'];?>" name="language">
      <div class="text-danger">
    <?php echo form_error('language'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Subtitle</label>
      <input type="text" class="form-control form-control-rounded" value="<?php echo $r['mov_subtitle'];?>" name="subtitle">
      <div class="text-danger">
    <?php echo form_error('subtitle'); ?>
    </div> 
    </div>
    <div class="form-group">
        	

      <label for="exampleFormControlFile1">Poster Image</label>
      <input type="file" name="userfile" size="20" class="form-control-file" value="<?php echo $r['mov_poster'];?>" id="exampleFormControlFile1">
      <div class="text-danger">
    <?php echo form_error('userfile'); ?>
    </div> 
    </div>
    
    <div class="form-group">
      <label for="input-6">Gener</label>
      <select class="form-control form-control-rounded" name="gener_id" id="input-6">
        
<option disabled selected value>Please Choose Gener</option>
        <?php
        if(isset($gener)){
        foreach ($gener as $g) {
          echo "<option value='$g[gener_id]'>$g[gener] </option>";
        }}
        ?>
      </select>
      <div class="text-danger">
    <?php echo form_error('gener_id'); ?>
    </div> 
    </div>
    <div class="form-group">
      <label for="input-6">Ratting</label>
      <select class="form-control form-control-rounded" name="rating_id" id="input-6">
        
      <option disabled selected value>Please Choose Rating</option>
        <?php
        if(isset($rating)){
        foreach ($rating as $r) {
          echo "<option value='$r[rating_id]'>$r[rating]</option>";
        }}
        ?>
      </select>
      <div class="text-danger">
    <?php echo form_error('rating_id'); ?>
    </div> 
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update Movie</button>
    </div>
    
    </form>
  </div>
</div>
    <?php } } ?>
<!--End Row-->	
