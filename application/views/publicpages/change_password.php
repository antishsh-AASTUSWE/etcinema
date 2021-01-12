<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="<?php echo base_url() ?>publicassets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <h2 class="title">Change Password </h2>
                </div>
                <?php echo form_open('login/change_password'); ?>
                <div class="account-form">
                    <?php if ($this->session->flashdata('message')) : ?>
                        <?php echo '<p class"text-danger">' . $this->session->flashdata('message') . '</p>'; ?>
                    <?php elseif ($this->session->flashdata('error_msg')) : ?>
                        <?php echo '<p class"text-danger">' . $this->session->flashdata('error_msg') . '</p>'; ?>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="pass1">Old Password<span>*</span></label>
                        <input type="password" name="old_password" placeholder="Password" id="pass1">
                        <div class="text-danger">
                            <?php echo form_error('old_password'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password<span>*</span></label>
                        <input type="password" name="new_password" placeholder="Password" id="pass1">
                        <div class="text-danger">
                            <?php echo form_error('new_password'); ?>
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
                        <input type="submit" value="Change Password">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>