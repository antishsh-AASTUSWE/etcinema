
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
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>


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