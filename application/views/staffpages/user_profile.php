<div class="row">
    <div class="col-12 col-lg-4 col-xl-4">
        <div class="card">
            
            <div class="table-responsive">
             
                   
                            
                                                  
                            <label for="exampleInputEmail1"></label>
                           <div class="d-flex justify-content-center">
                                <a href="<?php echo base_url() ?>change_staff_pass" class="btn btn-light btn-round px-4 float-right">
                                    <i class="icon-lock"></i>Change Password</a>
                            </div> 
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

            <?php echo form_open("update_staf_profile") ?>
            <h4>edit profile </h4>
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" value="<?php echo $r['name']; ?>" name="name" placeholder="Name">
                    <div class="text-danger">
                        <?php echo form_error('name'); ?>
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
                        <?php echo form_error('username'); ?>
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
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="password" placeholder="Password">
                    <div class="text-danger">
                        <?php echo form_error('password'); ?>
                    </div>
                </div>

                

                <div class="col-lg-6">
                    <div class="form-group">
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update</button>
                        <a href="<?php echo base_url(); ?>staff_profile" class="btn btn-light btn-round px-5">Cancel</a>
                    </div>
                </div>
            </form>


       
    
<?php }}elseif(isset($password)){?>
            
    <?php echo form_open("change_staff_pass") ?>
    <h4>Change Password</h4>
            <form>
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
                        <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Update</button>
                        <a href="<?php echo base_url(); ?>staff_profile" class="btn btn-light btn-round px-5">Cancel</a>
                    </div>
                </div>
            </form>

<?php } ?>
</div>
        </div>
    </div>
    </div>

