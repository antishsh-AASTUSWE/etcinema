<?php if(isset($records)){ ?>
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Cinema</h5>

    <?php foreach( $records as $r) { ?>
      
<?php echo form_open("index.php/admin/update_user/{$r['user_id']}");?>

<form>
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
    <input type="date" class="form-control" id="formGroupExampleInput"  name="date_of_birth" value="<?php echo $r['date_of_birth'];?>"  placeholder="birth date">
    <div class="text-danger">
    <?php echo form_error('date_of_birth'); ?>
    </div>   
</div>
<div class="form-group">
    <label for="formGroupExampleInput">User Role</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="role"   value="<?php echo $r['role'];?>" placeholder="User Role">
    <div class="text-danger">
    <?php echo form_error('role'); ?>
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
    <input type="password" class="form-control" id="formGroupExampleInput"  name="password"   placeholder="Old Password">
    <div class="text-danger">
    <?php echo form_error('password'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">New Password</label>
<input type="password" class="form-control" id="formGroupExampleInput"  name="new_password"   placeholder="New Password">
    <div class="text-danger">
    <?php echo form_error('new_password'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Confirm Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput"  name="password2"   placeholder="COnfirm New Password">
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
  <?php }} ?>
 