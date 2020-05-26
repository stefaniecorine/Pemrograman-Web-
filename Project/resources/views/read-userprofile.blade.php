<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pemeriksaan Poliklinik - Data Pasien</title>
	<link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medilab Free Bootstrap HTML5 Template</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
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
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="/css/style.css">
  	<link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<!--<body onload='document.form1.text1.focus()'>
 <script src="password-validate.js"></script>-->

<body>
	 <!--banner-->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><img src="img/logo-1.png" class="img-responsive" style="height:60px; margin-top: -16px;"></a>
            </div>

            <div class="navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav" style="display:inline">
                <li class=""><a href="/user">Home</a></li>
                <li class=""><a href="/jadwal-dokter">Jadwal Dokter</a></li>
                <li  class="dropdown active">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hi, {{Session::get('nama_pasien')}}! </a>
                  <ul class="dropdown-menu">
                    <li><a href="/user-profile">Your Profile</a></li>
                    <li><a href="/reservasi-user/add_data">Your Reservations</a></li>
                    <li><a href="/logout">Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

  <!--/ banner-->

	<!--form pasien-->
	<section id="pasien">
		<div class="limiter">
			<div class="container-login100" style="background-image: url('../img/bg-profile.jpg');background-color: rgba(222, 30, 27 ,0.4);">
						<div class="wrap-login100 p-t-30 p-b-50" style="width: 550px;margin-top:80px ">
					<span class="login100-form-title p-b-41">
						Your Profile
					</span>

					<form action="/user/store" method="post" class="login100-form validate-form p-b-33 p-t-5" style="color:#282B2F">
						{{ csrf_field() }}

						<div class="wrap-input100 " style="padding: 8px 0;">
							<input disabled style="font-size: 15px" type="text" class="input100" id="nama_pasien" name="nama_pasien" required="required" value="<?php echo Session::get('nama_pasien')?>">
							<span class="focus-input100" data-placeholder="&#xe82a;" style="top: -20px;"></span>
							
						</div>

						<div class="wrap-input100 " style="padding: 8px 0;">
							<input disabled style="font-size: 15px" type="text" class="input100" id="alamat" name="alamat" required="required" value="<?php echo Session::get('alamat'); ?>">
							<span class="focus-input100" data-placeholder="&#xe800;" style="top: -20px;"></span>
							
						</div>

						<div class="wrap-input100 "  style="padding: 8px 0;">
						<input disabled style="font-size: 15px" type="text" class="input100" id="gender" name="gender" required="required" value="<?php echo Session::get('gender')?>">
							<span class="focus-input100" data-placeholder="&#xe854;" style="top: -20px;"></span>
						</div>

						<div class="wrap-input100 " style="padding: 8px 0;">
							<input disabled style="font-size: 15px" type="text" class="input100" id="tgl_lahir" name="tgl_lahir" required="required" value="<?php echo Session::get('tgl_lahir')?>">
							<span class="focus-input100" data-placeholder="&#xe836;" style="top: -20px;"></span>
							
						</div>

						<div class="wrap-input100 " style="padding: 8px 0;">
							<input disabled style="font-size: 15px" type="tel" class="input100" id="no_telp" name="no_telp" required="required" value="<?php echo Session::get('no_telp')?>">
							<span class="focus-input100" data-placeholder="&#xe830;" style="top: -20px;"></span>
							
						</div>

						<div class="wrap-input100 " style="padding: 8px 0;">
							<input disabled style="font-size: 15px" type="email" class="input100" id="email" name="email" required="required" value="<?php echo Session::get('email')?>">
							<span class="focus-input100" data-placeholder="&#xe818;" style="top: -20px;"></span>
						</div>
						<h6 style="font-size:11px;font-style:italic; font-family: Ubuntu-Regular;margin-left:20px;margin-top:15px">
							note: jika ada data diri yang perlu dirubah, harap menemui petugas registrasi SHC </h6>
					</form>
				</div>
			</div>
		</div>
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
	<script src="/js/jquery.min.js"></script>
  <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/custom.js"></script>
  <script src="/contactform/contactform.js"></script>
  



</body>

</html>