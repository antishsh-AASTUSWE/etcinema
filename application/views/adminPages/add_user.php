     
<div class="card">
            <div class="card-body"> 
              <h5 class="card-title">Add User</h5>

<?php echo form_open('index.php/admin/create_user')?>
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
    <input type="date" class="form-control" id="formGroupExampleInput"  name="date_of_birth"   placeholder="birth date">
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
    <label for="formGroupExampleInput">User Role</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="role"   placeholder="User Role">
    <div class="text-danger">
    <?php echo form_error('role'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput"  name="password"   placeholder="Password">
    <div class="text-danger">
    <?php echo form_error('password'); ?>
    </div> 
</div>
<div class="form-group">
    <label for="formGroupExampleInput">Confirm Password</label>
    <input type="password" class="form-control" id="formGroupExampleInput"  name="password2"   placeholder="Confirm Password">
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
  