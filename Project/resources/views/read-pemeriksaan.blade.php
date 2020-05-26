<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pemeriksaan Poliklinik - Data Pemeriksaan</title>
	<link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medilab Free Bootstrap HTML5 Template</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
	<section id="banner" class="banner" style="background:url('../img/bg-pemeriksaan.jpg') no-repeat fixed;background-size: cover;
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
							<a class="navbar-brand" href="#"><img src="img/logo-1.png" class="img-responsive" style="height:50px; margin-top:-16px;"></a>
						</div>

						<div class="collapse navbar-collapse navbar-right" id="myNavbar">
							<ul class="nav navbar-nav">
								<ul class="nav navbar-nav">
									<li><a href="/medis">Hi, {{Session::get('nama')}}</a></li>
									<li><a href="/reservasi-medis">Reservasi</a></li>
									<li class="active"><a href="/pemeriksaan">Pemeriksaan</a></li>
									<li><a href="/logout">Log out</a></li>
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
										font-family:'Lucida Sans Unicode', sans-serif" ;>Data Pemeriksaan</h2>
							<hr style="border: 5px solid #FFB300 ;text-align:center;width:480px">
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

	<!-- pemeriksaan -->
	<section id="banner" class="banner" style="background:url('../img/bg-pemeriksaan2.jpg') no-repeat fixed;background-size: cover;
	min-height:650px;
	position: relative;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<br>
					<h4 class="ser-title">
						<a class="btn btn-success" href="/pemeriksaan-medis/add_data">Tambah Pemeriksaan Baru</a>
						<a href="/pemeriksaan/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
					</h4>
					<br>

					<table class="table table-bordered table-hover" style="color:#17202A ">
						<thead>
							<tr>
								<th scope="col">ID Pemeriksaan</th>
								<th scope="col">Nama Pasien</th>
								<th scope="col">Nama Dokter</th>
								<th scope="col">Tanggal Pemeriksaan</th>
								<th scope="col">Keluhan</th>
								<th scope="col">Catatan Medis</th>
								<th scope="col">ID Pembayaran</th>
								<th scope="col">Action</th>

							</tr>
						</thead>
						@foreach($pemeriksaan as $rsv)
						<tr>
							<td>{{ $rsv->id_pemeriksaan }}</td>
							<td>{{ $rsv->nama_pasien }}</td>
							<td>{{ $rsv->nama }}</td>
							<td>{{ $rsv->tgl_pemeriksaan }}</td>
							<td>{{ $rsv->keluhan }}</td>
							<td>{{ $rsv->catatan_medis }}</td>
							<td>{{ $rsv->id_pembayaran}}</td>

							<td>
								<a class="btn btn-primary" role="button" href="/pemeriksaan/edit/{{ $rsv->id_pemeriksaan }}"><i class="fa fa-edit" style="font-size:18px"></i></a>
								<a class="btn btn-danger" role="button" href="/pemeriksaan/hapus/{{ $rsv->id_pemeriksaan }}"><i class="fa fa-trash-o" style="font-size:18px"></i></a>
								<a class="btn btn-success" role="button" href="/upload/"><i class="fa fa-upload" style="font-size:18px"></i></a>
							</td>
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