
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Peramalan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login-animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login-css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/login-select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util_login.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main_login.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url() ?>assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?= base_url('auth/action') ?>" method="post">
					<span class="login100-form-title">
						Login Peramalan
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<!-- <a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

		
    <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
	<script src="<?= base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/login-select2/select2.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/login-tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="<?= base_url() ?>assets/js/main_login.js"></script>

</body>
</html>