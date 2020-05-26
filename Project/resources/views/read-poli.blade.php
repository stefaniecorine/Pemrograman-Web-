<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pemeriksaan Poliklinik - Data Pasien</title>
	<link rel = "icon" type = "image/png" href = "img/logo-0.png">
    <link rel = "apple-touch-icon" type = "image/png" href = "img/logo-0.png"/>
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
	<section id="banner" class="banner">
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
							<li><a href="/biopegawai">HOME</a></li>
								<li class="dropdown active">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">Data Poliklinik<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="/pasien">Data Pasien</a></li>
										<li><a href="/petugas">Data Petugas Medis</a></li>
										<li><a href="/pegawai">Data Pegawai</a></li>
										<li><a href="/reservasi">Data Reservasi</a></li>
										<li><a href="/pembayaran">Data Pembayaran</a></li>
										<li><a href="/pemeriksaan-pegawai">Data Pemeriksaan</a></li>
										<li><a href="/poli">Data Poli</a></li>
										<li><a href="/saran">Data Saran-Pertanyaan</a></li>
									</ul>
								</li>
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
										font-family:'Lucida Sans Unicode', sans-serif" ;>Data Poli</h2>
							<hr style="border: 5px solid #FFB300 ;text-align:center;width:230px">
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

	<!--tabel poli-->
	<section id="banner" class="banner" style="background:url('../img/bg-poli2.jpg') no-repeat fixed;background-size: cover;
	min-height:650px;
	position: relative;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8">
					<h4 class="ser-title"><a class="btn btn-success" href="/poli/add_data">Tambah Poli Baru</a></h4>
					<a href="/poli/cetak_pdf" class="btn btn-primary" target="_blank">Cetak PDF</a>
					<table class="table table-bordered table-hover" style="color:#17202A;margin-top:5px ">
						<thead>
							<tr>
								<th>ID Poli</th>
								<th>Nama Poli</th>
								<th>Ruangan Poli</th>
								<th>Tarif (Rp) </th>
								<th>Action</th>
							</tr>
						</thead>
						@foreach($poli as $pl)
						<tr>
							<td>{{ $pl->id_poli }}</td>
							<td>{{ $pl->nama_poli }}</td>
							<td>{{ $pl->no_ruang }}</td>
							<td>{{ $pl->tarif}}	
							<td>
								<a class="btn btn-primary" role="button" href="/poli/edit/{{ $pl->id_poli }}"><i class="fa fa-edit" style="font-size:20px"></i></a>
								<a class="btn btn-danger" role="button" href="/poli/hapus/{{ $pl->id_poli }}"><i class="fa fa-trash-o" style="font-size:20px"></i></a>
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