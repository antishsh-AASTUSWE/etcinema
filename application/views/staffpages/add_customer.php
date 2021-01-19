     <div class="card">
         <div class="card-body">
             <h5 class="card-title">Add Customer</h5>

             <?php echo form_open('staff_add_customer') ?>

             <form>
                 <div class="form-group">
                     <label for="formGroupExampleInput">First Name</label>
                     <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="fname" placeholder="First Name">
                     <div class="text-danger">
                         <?php echo form_error('fname'); ?>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput">Last Name</label>
                     <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="lname" placeholder="Last Name">
                     <div class="text-danger">
                         <?php echo form_error('lname'); ?>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput">Email</label>
                     <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="email" placeholder="email">
                     <div class="text-danger">
                         <?php echo form_error('email'); ?>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput">Birth Date</label>
                     <input type="date" class="form-control form-control-rounded" id="formGroupExampleInput" name="date_of_birth" placeholder="birth date">
                     <div class="text-danger">
                         <?php echo form_error('date_of_birth'); ?>
                     </div>
                 </div>
                 <div class="form-group">
                     <label for="formGroupExampleInput">Phone number</label>
                     <input type="text" class="form-control form-control-rounded" id="formGroupExampleInput" name="phone" placeholder="Phone Number">
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
                 <div class="form-group">
                     <label for="formGroupExampleInput">Confirm Password</label>
                     <input type="password" class="form-control form-control-rounded" id="formGroupExampleInput" name="password2" placeholder="Confirm Password">
                     <div class="text-danger">
                         <?php echo form_error('password2'); ?>
                     </div>
                 </div>


                 <div class="col-lg-6">
                     <div class="form-group">
                         <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Add Customer</button>
                         <a href="<?php echo base_url(); ?>staff_customer" class="btn btn-light btn-round px-5">Cancel</a>
                     </div>
                 </div>
             </form>


         </div>
     </div>