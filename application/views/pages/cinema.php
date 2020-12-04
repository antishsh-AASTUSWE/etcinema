<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Cinema</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/Pages/add_cinema')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="id" readonly value="<?php echo $r['cinema_id'];?>"  placeholder="id">
    <div class="text-danger">
    <?php echo form_error('id'); ?>
    </div> 
  <div class="form-group">
    <label for="formGroupExampleInput">cinema</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="cinema_name" value="<?php echo $r['cinema_name'];?>"  placeholder="cinema">
    <div class="text-danger">
    <?php echo form_error('cinema_name'); ?>
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
              <h5 class="card-title">Add Cinema</h5>

<?php echo form_open('index.php/Pages/add_cinema')?>
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">cinema</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="cinema_name"  placeholder="cinema name">
    <div class="text-danger">
    <?php echo form_error('cinema_name'); ?>
    </div>   
</div> 
<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
             
</div>
</div>
  <?php }?>
 <?php if(isset($cinema)){?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cinema</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Cinema Name</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $cinema as $r) { 

       
             
               echo "<tr>"; 
               echo "<td>".$r->cinema_id."</td>"; 
               echo "<td>".$r->cinema_name."</td>";?>
               
               <td>
                 
               <a href="<?php echo site_url('index.php/pages/delete_cinema/').$r->cinema_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_cinema/').$r->cinema_id;?>">
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