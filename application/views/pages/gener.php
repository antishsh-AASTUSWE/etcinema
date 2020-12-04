<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Gener</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/Pages/add_gener')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['gener_id'];?>"  placeholder="id">
    <div class="text-danger">
    <?php echo form_error('id'); ?>
    </div>  
</div> 
  <div class="form-group">
    <label for="formGroupExampleInput">Gener</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="gener" value="<?php echo $r['gener'];?>"  placeholder="Gener">
    <div class="text-danger">
    <?php echo form_error('gener'); ?>
    </div>  
</div>
</div>

  
<div class="form-group">
<input type="submit" value='save'>
 
</div>


</form>
</div>
</div>
  <?php }} else{?>
      
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Rating</h5>

<?php echo form_open('index.php/Pages/add_gener')?>
<form> 
  <div class="form-group">
    <label for="formGroupExampleInput">Gener</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="gener"  placeholder="Gener">
    <div class="text-danger">
    <?php echo form_error('gener'); ?>
    </div>  
</div>
</div>
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
             
</div>
</div>
  <?php }?>

 <?php if(isset($geners)){?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rating</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Gener</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $geners as $r) { 

       
             
        echo "<tr>"; 
        echo "<td>".$r->gener_id."</td>"; 
               echo "<td>".$r->gener."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/pages/delete_gener/').$r->gener_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_gener/').$r->gener_id;?>">
                   <i class="zmdi zmdi-edit zmdi-hc-lg"></i></a>
           
                   
                  
                </td>
               <?php echo "<tr>"; 
         
   echo " </tbody>";
}
?>
</table>
<?php } ?>
              
            </div>
            </div>
          </div>