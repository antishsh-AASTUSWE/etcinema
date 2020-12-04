
<div class="col-lg-6"></div>
<div class="card ">

  <div class="card-body">
  <h5 class="card-title">Add movie</h5>
  <?php if(isset($records)){ ?>
    <div class="invalid-feedback">
    <?php echo validation_errors(); ?>
    </div> 
    
    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/admin_dashbord/add_movie')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['movie_id'];?>"  placeholder="id">
    <div class="invalid-feedback">
    </div>

    <div class="form-group">
    <label for="formGroupExampleInput">Movie Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $r['mov_name'];?>" name="name"  placeholder="Movie Title">
    <div class="invalid-feedback">
    <?php echo set_value('username');?>
    </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staring</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="staring"value="<?php echo $r['mov_starring'];?>" placeholder="Staring">
    <div class="invalid-feedback">
    <?php echo set_value('Staring');?>
    </div>
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Poster</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster">value="<?php echo $r['mov_poster'];?>"
    <div class="invalid-feedback">
          
          </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Trailor</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="trailor"value="<?php echo $r['mov_trailor'];?>" placeholder="Trailor">
    <div class="invalid-feedback">
          
          </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plot"value="<?php echo $r['mov_plot'];?>"></textarea>
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Rating</label>
    <?php if(isset($ratings)){ 
 ?>
    <select name="rating" value="<?php echo $r['rating'];?>"class="form-control">
    <option disabled selected value>Please select Rating</option>
      <?php foreach( $ratings as $y) { ?>
       <?php echo "<option>".$y->rating."</option>";}} ?>
       
    </select>
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Running Time</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="running_time"value="<?php echo $r['mov_running_time'];?>" placeholder="running time">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Subtitle</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="subtitle" value="<?php echo $r['mov_subtitle'];?>" placeholder="subtitle">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Gener</label>
    <?php if(isset($geners)){ 
 ?>
    <select name="gener" value="<?php echo $r['gener'];?>" class="form-control" >
    <option disabled selected value>Please select gener</option>
      <?php foreach( $geners as $x) { ?>
       <?php echo "<option>".$x->gener."</option>";}} ?>
    </select>
    <div class="invalid-feedback">
          
          </div>  
</div>

<div class="form-group">
    <label for="formGroupExampleInput2">Realse Date</label>
    <input placeholder="Select date" type="date" id="example" name="realse_date" value="<?php echo $r['mov_realse_date'];?>"class="form-control datepicker">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Language</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="language" value="<?php echo $r['mov_language'];?>"placeholder="language">
    <div class="invalid-feedback">
          
          </div>  

<div class="form-group">
<input type="submit" value='save'>
 
</div>



   
</form>
  <?php }} 
  else{ ?>
    <?php echo validation_errors(); ?>
<?php echo form_open('index.php/admin_dashbord/add_movie')?>
<form>
<div class="form-group">
    <label for="formGroupExampleInput">Movie Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="name"  placeholder="Movie Title">
    <div class="invalid-feedback">
    <?php echo set_value('username');?>
    </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staring</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="staring" placeholder="Staring">
    <div class="invalid-feedback">
    <?php echo set_value('Staring');?>
    </div>
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Poster</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="poster">
    <div class="invalid-feedback">
          
          </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Trailor</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="trailor" placeholder="Trailor">
    <div class="invalid-feedback">
          
          </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plot"></textarea>
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
  
    <label for="formGroupExampleInput2">Rating</label>
    <?php if(isset($ratings)){ 
 ?>
    <select name="rating" class="form-control">
    <option disabled selected value>Please select Rating</option>
      <?php foreach( $ratings as $y) { ?>
       <?php echo "<option>".$y->rating."</option>";}} ?>
    </select>
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Running Time</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="running_time" placeholder="running time">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Subtitle</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="subtitle" placeholder="subtitle">
    <div class="invalid-feedback">
          
          </div>  
</div>

<div class="form-group">
<label for="formGroupExampleInput2">Gener</label>
<?php if(isset($geners)){ 
 ?>
    <select name="gener" class="form-control">
    <option disabled selected value>Please select gener</option>
      <?php foreach( $geners as $x) { ?>
       <?php echo "<option>".$x->gener."</option>";}} ?>
    </select>
    <div class="invalid-feedback">
          
          </div>  
</div>

<div class="form-group">
    <label for="formGroupExampleInput2">Realse Date</label>
    <input placeholder="Select date" type="date" id="example" name="realse_date" class="form-control datepicker">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Language</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="language" placeholder="language">
    <div class="invalid-feedback">
          
          </div>  
</div>
<div class="form-group">
<input type="submit" value='save'>
 
</div>



</form>
  <?php }?>
</div>
</div>



<div class="modal-body">
        

<div class="card ">

  <div class="card-body">
  <?php if(isset($records)){ ?>
    <div class="invalid-feedback">
    </div> 
    
    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/Pages/add_movie')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['movie_id'];?>"  placeholder="id">
    <div class="text-danger">
    <?php echo form_error('id'); ?>
    </div> 

    <div class="form-group">
    <label for="formGroupExampleInput">Movie Title</label>
    <input type="text" class="form-control" id="formGroupExampleInput" value="<?php echo $r['mov_name'];?>" name="name"  placeholder="Movie Title">
    <div class="text-danger">
    <?php echo form_error('name'); ?>
    </div>  
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Staring</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="staring"value="<?php echo $r['mov_starring'];?>" placeholder="Staring">
    <div class="text-danger">
    <?php echo form_error('staring'); ?>
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
    <?php echo form_error('trailor'); ?>
    </div> 
</div>
  <div class="form-group">
    <label for="formGroupExampleInput2">plot</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="plot"value="<?php echo $r['mov_plot'];?>"></textarea>
    <div class="text-danger">
    <?php echo form_error('plot'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Rating</label>
    <?php if(isset($ratings)){ 
 ?>
    <select name="rating" value="<?php echo $r['rating'];?>"class="form-control">
    <option disabled selected value>Please select Rating</option>
      <?php foreach( $ratings as $y) { ?>
       <?php echo "<option>".$y->rating."</option>";}} ?>
       
    </select>
    <<div class="text-danger">
    <?php echo form_error('rating'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput2">Running Time</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="running_time"value="<?php echo $r['mov_running_time'];?>" placeholder="running time">
    <div class="text-danger">
    <?php echo form_error('runnung_time'); ?>
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
    <?php if(isset($geners)){ 
 ?>
    <select name="gener" value="<?php echo $r['gener'];?>" class="form-control" >
    <option disabled selected value>Please select gener</option>
      <?php foreach( $geners as $x) { ?>
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

          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
      </div>



   
</form>
  <?php }} 
  else{ ?>
<?php echo form_open('index.php/Pages/add_movie')?>
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
    <?php if(isset($ratings)){ 
 ?>
    <select name="rating" class="form-control">
    <option disabled selected value>Please select Rating</option>
      <?php foreach( $ratings as $y) { ?>
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
    <?php echo form_error('runnung_time'); ?>
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
<?php if(isset($geners)){ 
 ?>
    <select name="gener" class="form-control">
    <option disabled selected value>Please select gener</option>
      <?php foreach( $geners as $x) { ?>
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


<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save </button>
      </div>

</form>
  <?php }?>
</div>
</div>
