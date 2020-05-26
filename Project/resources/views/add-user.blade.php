<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pemeriksaan Poliklinik - Tambah Data Pasien</title>
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
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<!--<body onload='document.form1.text1.focus()'>
 <script src="password-validate.js"></script>-->

<body>
	<!--form pasien-->
	<section id="pasien">
		<div class="limiter">
			<div class="container-login100" style="background-image: url('../img/bg-02.jpg');background-color: rgba(222, 30, 27 ,0.4);">
				<div class="wrap-login100 p-t-30 p-b-50" style="width: 550px;">
					<span class="login100-form-title p-b-41">
						Registration Page
					</span>

					<form action="/user/store" method="post" class="login100-form validate-form p-b-33 p-t-5" style="color:#282B2F">
						{{ csrf_field() }}

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="text" class="input100" id="nama_pasien" name="nama_pasien" required="required" placeholder="Your name">
							<span class="focus-input100" data-placeholder="&#xe82a;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="text" class="input100" id="alamat" name="alamat" required="required" placeholder="Your address">
							<span class="focus-input100" data-placeholder="&#xe800;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						<div class="wrap-input100 validate-input">
							<div class="form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="gender" value="Laki-Laki" required="required" style="margin-left: 80px">
								<h2 style="font-size:15px;font-family: Ubuntu-Regular;text-transform:none;margin-left: 100px"> Laki-Laki</h2>
							</div>

							<div class="form-check-inline">
								<input class="form-check-input" type="radio" name="gender" id="gender" value="Perempuan" required="required" style="margin-left: 40px">
								<h2 style="font-size:15px;font-family: Ubuntu-Regular;text-transform:none;margin-left: 60px"> Perempuan</h2>
							</div>
							<span class="focus-input100" data-placeholder="&#xe854;" style="top: -15px;"></span>
						</div>

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="date" class="input100" id="tgl_lahir" name="tgl_lahir" required="required" placeholder="Your birthdate" min='1899-01-01' max='2000-13-13'>
							<span class="focus-input100" data-placeholder="&#xe836;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="tel" class="input100" id="no_telp" name="no_telp" required="required" placeholder="Your phone number" maxlength="14">
							<span class="focus-input100" data-placeholder="&#xe830;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="email" class="input100" id="email" name="email" required="required" placeholder="Your email address">
							<span class="focus-input100" data-placeholder="&#xe818;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						@if (Session::has('message'))
						<div class="alert alert-danger alert-block" style='font-size: 14px'>
							<strong>{{ Session::get('message') }}</strong>
							<button type="button" class="close" data-dismiss="alert">×</button>
						</div>
						@endif

						<div class="wrap-input100 validate-input" style="padding: 8px 0;">
							<input style="font-size: 15px" type="password" class="input100" id="password" name="password" required="required" placeholder="Your password" minlength="6" maxlength="8">
							<span class="focus-input100" data-placeholder="&#xe80f;" style="top: -20px;"></span>
							<div class="validation"></div>
						</div>

						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn" type="submit" style="font-size: 15px;" >
								Submit
							</button>
						</div>
					</div>
					</form>
			</div>
		</div>
		</div>

		<script>
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth() + 1; //January is 0!
			var yyyy = today.getFullYear();
			if (dd < 10) {
				dd = '0' + dd
			}
			if (mm < 10) {
				mm = '0' + mm
			}

			today = yyyy + '-' + mm + '-' + dd;
			document.getElementById("tgl_lahir").setAttribute("max", today);
		</script>

		
	
		</section>
	<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/vendor/animsition/js/animsition.min.js"></script>
	<script src="/vendor/bootstrap/js/popper.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/vendor/select2/select2.min.js"></script>
	<script src="/vendor/daterangepicker/moment.min.js"></script>
	<script src="/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="/vendor/countdowntime/countdowntime.js"></script>
	<script src="/js/main.js"></script>



</body>

</html>