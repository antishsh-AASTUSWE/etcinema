<!-- ==========Sign-In-Section========== -->
<section class="account-section bg_img" data-background="<?php echo base_url() ?>publicassets/images/account/account-bg.jpg">
    <div class="container">
        <div class="padding-top padding-bottom">
            <div class="account-area">
                <div class="section-header-3">
                    <?php if (isset($movie)) { ?>
                        <span class="cate"><?php echo $movie['booking_id'] ?></span>
                    <?php } ?>

                    <h2 class="title">Confirm Payment</h2>
                </div>
                <?php echo form_open("payment/{$movie['booking_id']}") ?>
                <div class="account-form">
<!--                     <div class="form-group">
                        <label for="firstname">Depositer Name<span>*</span></label>
                        <input type="text" name="depositer_name" placeholder="Depositer Name" id="firstname">
                        <div class="text-danger">
                            <?php echo form_error('depositer_name'); ?>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="email1">Transaction Number<span>*</span></label>
                        <input type="text" name="transaction_no"value="<?php echo set_value('transaction_no'); ?>" placeholder="Transaction No" id="lastname">
                        <div class="text-danger">
                            <?php echo form_error('transaction_no'); ?>

                            <?php if (isset($error)) {
                                echo $error;
                            }?>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="username">Payment Date<span>*</span></label>
                        <input type="date" name="payment_date" placeholder="Payment Date" id="username">
                        <div class="text-danger">
                            <?php echo form_error('payment_date'); ?>
                        </div>
                    </div> -->


                    <div class="form-group text-center">
                        <input type="submit" value="Confirm Payment">
                    </div>
                </div>
                </form>



            </div>
        </div>
    </div>
</section>