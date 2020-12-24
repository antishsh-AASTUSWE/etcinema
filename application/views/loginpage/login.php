<!-- Start wrapper-->
<div id="wrapper">

	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
			<div class="card-content p-2">
				<div class="text-center">
					<img src="<?php echo base_url() ?>assets/images/logo-icon.png" alt="logo icon">
				</div>
				<div class="card-title text-uppercase text-center py-3">Sign In</div>
				<?php echo form_open('login/authenticate_login'); ?>
				<div class="container">
					<?php if ($this->session->flashdata('login_failed')) : ?>
						<?php echo '<p class"text-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
					<?php endif; ?>
				</div>
				<div class="form-group">
					<label for="exampleInputUsername" class="sr-only">Username</label>
					<div class="position-relative has-icon-right">
						<input type="text" name="username" id="exampleInputUsername" class="form-control input-shadow">
						<div class="form-control-position">
							<i class="icon-user"></i>
						</div>
					</div>
					<div class="text-danger">
						<?php echo form_error('username'); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword" class="sr-only">Password</label>
					<div class="position-relative has-icon-right">
						<input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow">
						<div class="form-control-position">
							<i class="icon-lock"></i>
						</div>
					</div>
					<div class="text-danger">
						<?php echo form_error('password'); ?>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-6">
						<div class="icheck-material-white">
							<input type="checkbox" id="user-checkbox" />
							<label for="user-checkbox">Remember me</label>
						</div>
					</div>
					<div class="form-group col-6 text-right">
						<a href="reset-password.html">Reset Password</a>
					</div>
				</div>
				<button type="submit" class="btn btn-light btn-block">Sign In</button>

				<?php echo form_close(); ?>
			</div>
		</div>

	</div>

	<!--Start Back To Top Button-->
	<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
	<!--End Back To Top Button-->



</div>