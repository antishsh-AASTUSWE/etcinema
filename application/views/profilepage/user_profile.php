<div class="row">
    <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
            
            <div class="table-responsive">
             
                   
                            
                                                  
                            <label for="exampleInputEmail1"></label>
                           <!--  <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>delete_profile" class="btn btn-light btn-round px-4 float-right">
                                    <i class="icon-lock"></i>Delete My Account</a>
                            </div> -->
                            <label for="exampleInputEmail1"></label>
            </div>

        </div>
    </div>
    <div class="col-12 col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-header">Profile

            </div>
            <div class="card-body">
           <?php if(isset($edit_profile)){ ?>
                    
                    <?php foreach ($edit_profile as $r) { ?>

            <?php echo form_open("update_profile") ?>
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
                    <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['username']; ?>" name="username" placeholder="User name">
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
                    <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="old_password" placeholder="Password">
                    <div class="text-danger">
                        <?php echo form_error('old_password'); ?>
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
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update</button>
                        <a href="<?php echo base_url(); ?>user_profile" class="btn btn-light btn-round px-5">Cancel</a>
                    </div>
                </div>
            </form>


        </div>
    </div>
<?php }}?>
            

        </div>
    </div>


