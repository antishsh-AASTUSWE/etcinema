<?php echo form_open('index.php/admin/otp_verification')?>
<form>
<?php
		if(!empty($error_message)) {
	?>
    <div class="message error_message"><?php echo $error_message;} ?></div>
    
<div class="form-group">
    <label for="formGroupExampleInput">Please enter your verification code</label>
    <input type="text" class="form-control" id="formGroupExampleInput"  name="otp"  placeholder="Ticket">
    <div class="text-danger">
    <?php echo form_error('ticket'); ?>
    </div>   
</div> 

<div class="form-group">
<input type="submit" value='save'>
</div>
</form>