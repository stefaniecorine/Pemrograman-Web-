<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Surabaya Health Care - Reservasi</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	@page { margin: 50px 25px; }
	
    header { position: fixed; top: 0px; left: 0px; right: 0px;  height: 100px; }
    footer { position: fixed; bottom:-40px;  height: 50px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
  	</style>
</head>
<body>

	<footer>
		<div style="text-align:center;color:#000000;font-size:11.5px;line-height: normal;">
		<?php 
		$timezone = new DateTimeZone('Asia/Jakarta');
		$date = new DateTime();
		$date->setTimeZone($timezone);
		
		echo "Retrieved ".$date->format("d-m-Y ").$date->format("h:i:sa") ?>
		<br>
            © Copyright Surabaya Health Service Theme. All Rights Reserved
		</div>
	</footer>
	<main>
	<!--header-->
		<div class="row"> 
				<a class="navbar-brand" href="#"><img src="img/logo-2.png" class="img-responsive" style="height:75px;margin-top:-40px;margin-left:12px"></a>
		</div>
		<div class="col-md-12 col-sm-12">
				<h3 style="margin-top:-30px;">Surabaya Health Center</h3>
				<h6>Jl. Nginden Intan Barat No.B, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118</h6>
				<h6>Telp.+821 735 612 999,031-9987604, Fax 031-9987605</h6>
				<h6>info@sbyhealthcare.com</h6>
				<hr class="botm-line" style="height: 1px;width: 1030px;background:#000000;margin-top:-5px">
				<hr class="botm-line" style="height: 1.5px;width: 1030px;margin-top:-15px">
		</div>	
		</div>
	<!--header-->	
	<!--reservasi-->
		<div class="container">
			<div class="row" >
				<div class="col-md-12 col-sm-12">
					<h2 style="margin-top:15px;text-align:center"> Tabel Reservasi </h2>
					<br>
					<table class="table table-bordered table-hover" style="color:#17202A;margin-top:5px ">
						<thead>
							<tr>
								<th scope="col">ID Reservasi</th>
								<th scope="col">Tanggal Reservasi</th>
								<th scope="col">Tanggal Layanan</th>
								<th scope="col">ID Pasien</th>
								<th scope="col">ID Petugas</th>
								<th scope="col">Jadwal ke</th>
							</tr>
						</thead>
						@foreach($reservasi as $rsv)
						<tr style="font-size:13px">
							<td>{{ $rsv->id_reservasi }}</td>
							<td>{{ $rsv->tgl_reservasi }}</td>
							<td>{{ $rsv->tgl_layanan }}</td>
							<td>{{ $rsv->id_pasien }}</td>
							<td>{{ $rsv->id_petugas }}</td>
							<td>{{ $rsv->jadwal_ke}}</td>
						</tr>
						@endforeach
					</table>

				</div>
			</div>
		</div>
	<!--reservasi-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	</main>
</body>

</html>