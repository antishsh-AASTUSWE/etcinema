
<?php echo form_open('index.php/user/showFilter')?>

<div class="inner cover">
<form class="form-inline">
  
<div class="form-group" style="margin:10px";>
<select id="example" name='cinema' class="selectpiker" multiple="multiple">
<?php if(isset($cinema)){
  foreach ($cinema as $row){?>
<option value="<?php echo $row['cinema_id']; ?>"><?php echo $row['cinema_name']; ?></option>	
<?php } }?>
</select>
<div class="text-danger">
  <?php echo form_error('cinema'); ?>
  </div>  
</div>

 <div class="form-group"style="margin:10px";>
 <select id="example2" name='movie' class="selectpiker" multiple="multiple">
<?php if(isset($movie)){
  foreach ($movie as $row){?>
<option value="<?php echo $row['movie_id']; ?>"><?php echo $row['mov_name']; ?></option>	
<?php } }?>
</select>
<div class="text-danger">
  <?php echo form_error('movie'); ?>
  </div>  
</div>

<div class="form-group">
<input type="submit" class="btn btn-success" style="margin:10px"; value='Find Time And Book'>
</div>
  
</form>
</div>





          <div class="inner cover">
          <div class="form-group" style="margin:10px";>

<?php if(isset($showtime)){
  foreach ($showtime as $row){?>
<label for="formGroupExampleInput">Please enter your verification code</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="otp" value="<?php echo $row['cinema_id']; ?>" placeholder="Ticket">
    
<?php } }?>

<div class="text-danger">
  <?php echo form_error('cinema'); ?>
  </div>  
</div>
          </div>

          <div class="inner cover">
          <?php if(isset($showtime)){
  foreach ($showtime as $row){?>
<div class="row">
  <div class="col-xs-6 col-md-8">
    <a href="#" class="thumbnail">
      <img src="poster" alt="...">
    </a>
  </div>
        <h2><?php echo $row['mov_name']; ?></h2>
        <hr class="dashed">
        <br>
        <span><?php echo $row['mov_ratting']; ?></span>
        <span><?php echo $row['mov_gener']; ?></span>
        <span><?php echo $row['mov_language']; ?></span>
        <a class="read-more" href="/movies/wonder-woman-1984">Info</a>
</div>
<div class="dates">

<h3 class="highlight"><?php echo $row['cinema_name']; ?></h3>

<ol class="showtimes">
        <li>
           
            <ol>
                    <li data-id="0036-25523">
                            <a class="action showtime" href="/booking/0036-25523"><?php echo $row['show_date']; ?> <span><?php echo $row['show_time']; ?></span></a>
                    </li>
                   
            </ol>
        </li>
</ol>
</div>

<?php } }?>
          <script type="text/javascript">
    $(document).ready(function() {
        $('#example').multiselect({
            nonSelectedText :'Select Your Cinima(s)',
            //enableFiltering : false,
            //enableCaseInsensitiveFiltering : true,
        buttonWidth : '200px'
        }
        );
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').multiselect({
            nonSelectedText :'Select Your Movies(s)',
            //enableFiltering : false,
            //enableCaseInsensitiveFiltering : true,
        buttonWidth : '200px'
        }
        );
    });
</script>


