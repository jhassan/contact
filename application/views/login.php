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
									<!-- <a class="auth-brand text-center d-block mb-20" href="#">
										<img class="brand-img" src="<?php echo base_url('assets/dist/img/logo-light.png');?>" alt="brand"/>
									</a> -->
						
						            <form action="" method="post">
						            	<input type="hidden" name="action" value="do_login">
										<h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
										<p class="text-center mb-30">Sign in to your account and enjoy!.</p> 
										<div class="form-group">
											<input class="form-control" name="username" placeholder="User Name" type="text">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Password" type="password" name="password">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										<button class="btn btn-primary btn-block" type="submit">Login</button>
										<p class="font-14 text-center mt-15">Having trouble logging in?</p>
										<div class="option-sep">or</div>
										<div class="form-row">
										</div>
										<p class="text-center">Do have an account yet? <a href="signup">Sign Up</a></p>
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