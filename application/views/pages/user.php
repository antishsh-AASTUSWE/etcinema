<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Cinema</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open('index.php/Pages/add_user')?>

<form>
<div class="form-group">
    <label for="formGroupExampleInput">ID</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="user_id" readonly value="<?php echo $r['user_id'];?>"  placeholder="id">
    <div class="text-danger">
    <?php echo form_error('user_id'); ?>
    </div>  
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="name" value="<?php echo $r['name'];?>"  placeholder="Name">
    <div class="text-danger">
    <?php echo form_error('name'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="email" value="<?php echo $r['email'];?>"  placeholder="email">
    <div class="text-danger">
    <?php echo form_error('email'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Birth Date</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="date" value="<?php echo $r['date_of_birth'];?>"  placeholder="birth date">
    <div class="text-danger">
    <?php echo form_error('date'); ?>
    </div>   
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Phone number</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="phone" value="<?php echo $r['phone_no'];?>"  placeholder="phone">
    <div class="text-danger">
    <?php echo form_error('phone'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Old Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="password"  value="<?php echo $r['password'];?>"  placeholder="phone">
    <div class="text-danger">
    <?php echo form_error('password'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">New Password</label>
<input type="text" class="form-control" id="formGroupExampleInput"  name="new_password"   placeholder="New Password">
    <div class="text-danger">
    <?php echo form_error('password2'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Confirm Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="password2"   placeholder="COnfirm New Password">
    <div class="text-danger">
    <?php echo form_error('password2'); ?>
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
              <h5 class="card-title">Add User</h5>

<?php echo form_open('index.php/Pages/add_user')?>
<form>
<div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="name"  placeholder="Name">
    <div class="text-danger">
    <?php echo form_error('name'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="email"   placeholder="email">
    <div class="text-danger">
    <?php echo form_error('email'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Birth Date</label>
    <input type="date" class="form-control" id="formGroupExampleInput"  name="date"   placeholder="birth date">
    <div class="text-danger">
    <?php echo form_error('date_of_birth'); ?>
    </div>   
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Phone number</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="phone"   placeholder="phone">
    <div class="text-danger">
    <?php echo form_error('phone'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="password"   placeholder="Password">
    <div class="text-danger">
    <?php echo form_error('password'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Confirm Password</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="password2"   placeholder="Confirm Password">
    <div class="text-danger">
    <?php echo form_error('password2'); ?>
    </div> 
</div>


<div class="form-group">
<input type="submit" value='save'>
</div>
</form>
 
             
</div>
</div>
  <?php }?>
 <?php if(isset($user)){?>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cinema</h5>
			  <div class="table-responsive">
               <table class="table table-sm">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
      <th scope="col"></th>
                  </tr>
                </thead>
                <?php 
            
 echo "<tbody>";
      foreach( $user as $r) { 

       
             
               echo "<tr>"; 
               echo "<td>".$r->user_id."</td>"; 
               echo "<td>".$r->name."</td>";
               echo "<td>".$r->email."</td>"; 
               echo "<td>".$r->phone_no."</td>";
               echo "<td>".$r->date_of_birth."</td>"; 
               ?>
               <td>
                 
               <a href="<?php echo site_url('index.php/pages/delete_user/').$r->user_id;?>">
                   <i class="zmdi zmdi-delete zmdi-hc-lg"></i></a>
               </td>
               <td>
                   <a href="<?php echo site_url('index.php/pages/edit_user/').$r->user_id;?>">
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