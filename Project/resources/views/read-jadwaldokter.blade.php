<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pemeriksaan Poliklinik - Data Petugas Medis</title>
	<link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Surabaya Health Care</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner" style="background:url('../img/bg-petugas.jpg') no-repeat fixed;background-size: cover;
	min-height:650px;
	position: relative;">
		<div class="bg-color">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="col-md-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><img src="img/logo-1.png" class="img-responsive" style="height:50px; margin-top: -16px;"></a>
						</div>
						
						<div class="collapse navbar-collapse navbar-right" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class=""><a href="/user">Home</a></li>
							<li><a href="/jadwal-dokter">Jadwal Dokter</a></li>
							<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">Hi, {{Session::get('nama_pasien')}}! <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#banner">Edit Profile</a></li>
								<li><a href="/reservasi-user/add_data">Your Reservations</a></li>
								<li><a href="/logout">Log Out</a></li>
							</ul>
							</li>
						</ul>
						</div>
					</div>

				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="banner-info">

						<div class="banner-text text-center">
							<h2 style="text-transform: capitalize; font-size: 55px;color:#242625;
										font-family:'Lucida Sans Unicode', sans-serif" ;>Jadwal Dokter</h2>
							<hr style="border: 5px solid #FFB300 ;text-align:center;width:380px">
						</div>

						<div class="overlay-detail text-center">
							<a href=""><i class="fa fa-angle-down"></i></a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ banner-->

	<!--jadwal dokter-->
	<section id="banner" class="banner" style="background:url('../img/bg-petugas2.jpg') no-repeat fixed;background-size: cover;
	min-height:600px;
	position: relative;">
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<table class="table table-bordered table-hover" style="color:#17202A">
						<thead>
							<tr>
								<th>Nama Poli</th>
								<th>Nama Dokter</th>
								<th>Waktu Praktek [1] & [2]</th>
							</tr>
						</thead>
						@foreach($petugas as $pg)
						<tr>
							<td>{{ $pg->nama_poli}}</td>
							<td>{{ $pg->nama}}</td>
							<td>{{ $pg->waktu_praktek}}</td>
						</tr>
						@endforeach
					</table>
				</div>
				<div class="col-md-4 col-sm-4">
					<table class="table table-bordered table-hover" style="color:#17202A">
						<thead>
							<tr>
								<th>Nama Poli</th>
								<th>Tarif Poli</th>
							</tr>
						</thead>
						@foreach($poli as $pl)
						<tr>
							<td>{{ $pl->nama_poli}}</td>
							<td>{{ $pl->tarif}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>