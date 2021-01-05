

<div class="card">
  <div class="card-body">

    <h5 class="card-title">Edit user</h5>
    <?php echo validation_errors(); ?>
    <?php echo form_open('admin/update_user') ?>
<form>
   
    <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $items['user_id']; ?>">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo $items['name']; ?>"placeholder="Enter Name Here">
                <div class="text-danger">
                    <?php echo form_error('name'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" name="email" value="<?php echo $items['email']; ?>"placeholder="Enter Email Here">
                <div class="text-danger">
                    <?php echo form_error('email'); ?>
                </div>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">User Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="username" value="<?php echo $items['username']; ?>"placeholder="Enter Username Here">
                <div class="text-danger">
                    <?php echo form_error('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput" name="password" placeholder="Password">
                <div class="text-danger">
                    <?php echo form_error('password'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Confirm Password</label>
                <input type="password" class="form-control" id="formGroupExampleInput" name="password2" placeholder="Confirm Password">
                <div class="text-danger">
                    <?php echo form_error('password2'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Role</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="role" value="<?php echo $items['role']; ?>"placeholder="Enter Role Here">
                <div class="text-danger">
                    <?php echo form_error('role'); ?>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <label for="formGroupExampleInput">Status</label>
                </div>
                <div class="form-check form-check-inline icheck-material-white">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="active">
                    <label class="form-check-label" for="inlineRadio1">Active</label>
                </div>
                <div class="form-check form-check-inline icheck-material-white">
                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="inactive">
                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                </div>
                <div class="text-danger">
                    <?php echo form_error('status'); ?>
                </div>
      <div class="col-lg-6">
        <div class="form-group">
          <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Edit Gener</button>
          <a href="<?php echo base_url(); ?>admin/geners" class="btn btn-light btn-round px-5">Cancel</a>
        </div>
      </div>
    </div>

    </form>


  </div>
</div>