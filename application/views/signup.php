<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Contact</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="<?php echo base_url('assets/vendors/jquery-toggles/css');?>/toggles.css" rel="stylesheet" type="text/css">
		<link href="<?php echo base_url('assets/vendors/jquery-toggles/css/themes');?>/toggles-light.css" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="<?php echo base_url('assets/dist/css');?>/style.css" rel="stylesheet" type="text/css">

		<!-- Toastr CSS -->
    	<link href="<?php echo base_url('assets/vendors/jquery-toast-plugin/dist'); ?>/jquery.toast.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<header class="d-flex justify-content-end align-items-center">
				</header>
				<div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
                                <form action="signup" method="post">
                                	<input type="hidden" name="action" value="do_signup">
                                    <h1 class="display-4 mb-10 text-center">Sign up for free</h1>
                                    <p class="mb-30 text-center">Create your account and start your free trial today</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name="fname" placeholder="First name" value="<?php echo set_value('fname'); ?>" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" name="lname" placeholder="Last name" value="<?php echo set_value('lname'); ?>" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="username" placeholder="User Name" type="text" value="<?php echo set_value('username'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Email" type="email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" placeholder="Password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="<?php echo base_url('assets/vendors/jquery/dist');?>/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="<?php echo base_url('assets/vendors/popper.js/dist/umd');?>/popper.min.js"></script>
		<script src="<?php echo base_url('assets/vendors/bootstrap/dist/js');?>/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="<?php echo base_url('assets/dist/js');?>/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="<?php echo base_url('assets/dist/js');?>/dropdown-bootstrap-extended.js"></script>
		
		<!-- FeatherIcons JavaScript -->
		<script src="<?php echo base_url('assets/dist/js');?>/feather.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="<?php echo base_url('assets/dist/js');?>/init.js"></script>
		<!-- Toastr JS -->
    	<script src="<?php echo base_url('assets/vendors/jquery-toast-plugin/dist'); ?>/jquery.toast.min.js"></script>

    	<!-- <script src="<?php echo base_url('assets/dist/js/'); ?>/toast-data.js"></script> -->

    	<?php
    		include("assets/dist/js/toast-data.php");
    	?>
	</body>
</html>