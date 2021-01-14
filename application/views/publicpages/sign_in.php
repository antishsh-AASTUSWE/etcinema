<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="<?php echo base_url() ?>publicassets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <span class="cate">hello</span>
                    <h2 class="title">welcome back</h2>
                </div>
                <?php echo form_open('login/customer_signin'); ?>
                <div class="account-form">
                    <?php if ($this->session->flashdata('login_failed')) : ?>
                        <?php echo '<p class"text-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="email2">Email<span>*</span></label>
                        <input type="email" name="email" placeholder="Enter Your Email" id="email2">
                        <div class="text-danger">
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass3">Password<span>*</span></label>
                        <input type="password" name="password" placeholder="Password" id="pass3">
                        <div class="text-danger">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>
                    <div class="form-group checkgroup">
                        <input type="checkbox" id="bal2" required checked>
                        <label for="bal2">remember password</label>
                        <a href="#0" class="forget-pass">Forget Password</a>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="log in">
                    </div>
                </div>
                </form>
                <div class="option">
                    Don't have an account? <a href="<?php echo base_url() ?>login/customer_signup">sign up now</a>
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
                        <a href="">
                            <i class="fab fa-google"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========Sign-In-Section========== -->