
     
<div class="card">
            <div class="card-body"> 
              <h5 class="card-title">Add Seat Layout</h5>


<?php echo form_open('staff/addSeat')?>                        
<form method="post" action="">
<div class="form-group">
    <label for="formGroupExampleInput">Seat Row</label>
    <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput"  name="row"  
    placeholder="Seat Row">
    <div class="text-danger">
    <?php echo form_error('row'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Seat Col</label>
    <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput"  name="col"  
    placeholder="Seat Col">
    <div class="text-danger">
    <?php echo form_error('col'); ?>
    </div>  
</div>



<div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Seat Row & Col</button>
          </div>
      </div>
</form>
 
             
</div>
</div>



<?php
$row = "0";
$col = "0";
if(isset($seat)){ //check if form was submitted
  foreach($seat as $s){
  $col = $s['col'];
  $row = $s['row']; 
  }
   
?>

<div class="col-lg">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Seat Layout</h5>
			  <div class="table-responsive">

        <?php echo form_open('staff/addSeatLayout')?> 
          <form>
          
         
          
              <table class="table table-hover">
                
                
                <tbody>
                <?php
for($i=1;$i<=$col;$i++)
{
echo "<tr>";
for ($j=1;$j<=$row;$j++)
  {
  echo "<td>
  
  <div class='form-check'>
  <input type='checkbox' name=".$i*$j.">
</div>
  </td>";
  }
  echo "</tr>";
  }
?>
                </tbody>
              </table>
              <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Insert Seat LAyout</button>
          </div>
      </div>
          </form>

            </div>
            </div>
          </div>
        </div>
        <?php } ?>
        
       