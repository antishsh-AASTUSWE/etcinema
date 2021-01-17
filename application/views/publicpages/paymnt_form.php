<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="<?php echo base_url() ?>publicassets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">welcome</span>
                    <h2 class="title">to Etcinema </h2>
                </div>
                <?php echo form_open('login/customer_signup'); ?>
                <div class="account-form">
                    <div class="form-group">
                        <label for="firstname">First Name<span>*</span></label>
                        <input type="text" name="first_name" placeholder="Enter Your First Name" id="firstname">
                        <div class="text-danger">
                            <?php echo form_error('first_name'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email1">Last Name<span>*</span></label>
                        <input type="text" name="last_name" placeholder="Enter Your Last Name" id="lastname">
                        <div class="text-danger">
                            <?php echo form_error('last_name'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">User Name<span>*</span></label>
                        <input type="text" name="username" placeholder="Enter Your Username" id="username">
                        <div class="text-danger">
                            <?php echo form_error('username'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email1">Email<span>*</span></label>
                        <input type="text" name="email" placeholder="Enter Your Email" id="email1">
                        <div class="text-danger">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email1">Phone<span>*</span></label>
                        <input type="text" name="phone" placeholder="Enter Your Phone" id="phone">
                        <div class="text-danger">
                            <?php echo form_error('phone'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span>*</span></label>
                        <input type="password" name="password" placeholder="Password" id="pass1">
                        <div class="text-danger">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm Password<span>*</span></label>
                        <input type="password" name="password2" placeholder="Password" id="pass2">
                        <div class="text-danger">
                            <?php echo form_error('password2'); ?>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Sign Up">
                    </div>
                </div>
                </form>
                <div class="option">
                    Already have an account? <a href="<?php echo base_url()?>login/customer_signin">Login</a>
                </div>
                <div class="or"><span>Or</span></div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>