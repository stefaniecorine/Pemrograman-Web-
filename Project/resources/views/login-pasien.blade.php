<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Pasien</title>
	<link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medilab Free Bootstrap HTML5 Template</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<!--<body onload='document.form1.text1.focus()'>
 <script src="password-validate.js"></script>-->

<body>
	
	
	<!-- Main Section -->

	<section class="main-section">

		<div class="limiter">
			<div class="container-login100" style="background-image: url('../img/bg-01.jpg');">
				<div class="wrap-login100 p-t-30 p-b-50">
				
			@if(\Session::has('alert'))
                <div class="alert alert-warning" style="font-size:14px">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
					<span class="login100-form-title p-b-41">
						Account Login
					</span>

					<form action="/loginPostPasien" method="post" class="login100-form validate-form p-b-33 p-t-5">
						{!! csrf_field() !!}
						<div class="wrap-input100 validate-input" data-validate="Enter email">
							<input class="input100" id="email" type="email" name="email" placeholder="Email">
							<span class="focus-input100" data-placeholder="&#xe82b;"></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" id="password" type="password" name="password" placeholder="Password" minlength="6" maxlength="8">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
							<input type="checkbox" onclick="myFunction()" style="margin-left: 80px">
							<h2 style="font-size:15px;font-family: Ubuntu-Regular;
						text-transform:none;margin-left: 100px;margin-top:-18px">Show Password</h2>
						</div>
						@if (Session::has('message'))
							<div class="alert alert-danger alert-block" style="font-size:14px">
								<button type="button" class="close" data-dismiss="alert" >×</button> 
								<strong>{{ Session::get('message') }}</strong>
							</div>
						@endif
						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn" type="submit">
								LOG IN
							</button>

							<div class="container-login100-form-btn m-t-20">
								<div class="col-md-7">
									<h1 style="font-size: 15px;text-align:center"> Create an account?</h2>
								</div>
								<div class="col-md-7"><a href="/user/add_data" class="login100-form-btn" style="font-size: 13.5px">REGISTER</a></div>
							</div>
							
					</form>
				</div>
			</div>
		</div>


	</section>
	<!-- /.main-section -->

	<div id="dropDownSelect1"></div>
	<script>
		function myFunction() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>