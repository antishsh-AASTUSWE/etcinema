<?php if (isset($records)) { ?>
    <?php foreach ($records as $r) { ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Customer</h5>


                <?php echo form_open("admin_update_customer/{$r['cust_id']}") ?>
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['first_name']; ?>" name="fname" placeholder="First Name">
                        <div class="text-danger">
                            <?php echo form_error('fname'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Last Name</label>
                        <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['last_name']; ?>" name="lname" placeholder="Last Name">
                        <div class="text-danger">
                            <?php echo form_error('lname'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['email']; ?>" name="email" placeholder="email">
                        <div class="text-danger">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">User Name</label>
                        <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['username']; ?>" name="username" placeholder="User Name">
                        <div class="text-danger">
                            <?php echo form_error('date_of_birth'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Phone number</label>
                        <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['phone']; ?>" name="phone" placeholder="Phone Number">
                        <div class="text-danger">
                            <?php echo form_error('phone'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Old Password</label>
                        <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="password" placeholder="Password">
                        <div class="text-danger">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">New Password</label>
                        <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="new_password" placeholder="New Password">
                        <div class="text-danger">
                            <?php echo form_error('new_password'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Confirm Password</label>
                        <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="password2" placeholder="COnfirm New Password">
                        <div class="text-danger">
                            <?php echo form_error('password2'); ?>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update Customer</button>
                            <a href="<?php echo base_url(); ?>admin_customer" class="btn btn-light btn-round px-5">Cancel</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>
<?php }
} ?>