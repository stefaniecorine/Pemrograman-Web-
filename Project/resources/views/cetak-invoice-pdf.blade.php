<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Surabaya Health Care - Pembayaran</title>
	<link rel = "icon" type = "image/png" href = "img/logo-0.png">
    <link rel = "apple-touch-icon" type = "image/png" href = "img/logo-0.png"/>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
	@page { margin: 50px 25px; }
	
    header { position: fixed; top: -60px; left: 0px; right: 0px; background-color: lightblue; height: 40px; }
	footer { position: fixed; bottom:-60px;  height: 50px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
  	</style>
</head>
<body>
	<footer>
		
		<div style="text-align:center;color:#000000;font-size:7px;line-height: normal;">
		<?php 
		$timezone = new DateTimeZone('Asia/Jakarta');
		$date = new DateTime();
		$date->setTimeZone($timezone);
		echo "Retrieved ".$date->format("d-m-Y ").$date->format("h:i:sa") ?>
		<br>
            © Copyright Surabaya Health Service Theme. All Rights Reserved
		</div>
	</footer>
	<!--header-->
	<main>

	<div class="row"> 
				<a class="navbar-brand" href="#"><img src="img/logo-2.png" class="img-responsive" style="height:50px;margin-top:-40px;margin-left:12px"></a>
	</div>
	<div class="col-md-12 col-sm-12">
				<h6 style="margin-top:-50px;font-size:11.5px">Surabaya Health Center
				<span style="font-size:6.5px;line-height:1.4;"><br>
				Jl. Nginden Intan Barat No.B, Ngenden Jangkungan,Kec. Sukolilo, Kota SBY, Jawa Timur 60118
				<br>Telp.+821 735 612 999,031-9987604, Fax 031-9987605
				<br>info@sbyhealthcare.com</span></h6>
				<hr class="botm-line" style="height: 0.7px;width: 335px;background:#000000;margin-top:-5px">
				<hr class="botm-line" style="height: 2.5px;width: 335px;margin-top:-18px">
	
	</div>
	<!--header-->
	<!--isi-->
	
	<div class="col-md-12 col-sm-12">
					<span><h6 style="font-size:10px;text-align:center;margin-top:-10px;color:black">NOTA PEMBAYARAN</h4></span>
					<table class="table" style="margin-top:-5px;width:320px;">
						@foreach($pembayaran as $pb)
						<tr style="font-size:7px">
								<td style="padding:1px">ID Pembayaran: {{ $pb->id_pembayaran }}</td>
								<td style="padding:1px">Poli Tujuan: {{ $pb->nama_poli}}</td>
						</tr>
						<tr style="font-size:7px">
								<td style="padding:1px">Waktu Pembayaran: {{ $pb->tgl_pembayaran}}</td>
								<td style="padding:1px">Nama Dokter : {{$pb->nama}}</td>
						</tr>
						<tr style="font-size:7px;">
								<td style="padding:1px"></td>
								<td style="padding:1px">Nama Pasien : {{$pb->nama_pasien}}</td>
						</tr>
						@endforeach
					</table>		

	</div>
	<div class="container" style="margin-top:-10px">
			<div class="row" >
			<div class="col-md-8 col-sm-8">
					<br>
					<table class="table " style="color:#000000;margin-top:-10px;width:300px">
						<thead class="thead-dark">
							<tr style="font-size:9px">
								<th style="padding-top: 5px;padding-bottom:5px;">Keterangan</th>
								<th style="padding-top: 5px;padding-bottom:5px;">Tarif</th>
							</tr>
						</thead>
						@foreach($pembayaran as $pb)
						<tr style="font-size:8px;padding:1px">
							<td style="padding-top: 4px;padding-bottom:3px;">Tarif Karcis</td>
							<td style="padding-top: 4px;padding-bottom:3px;">{{ $pb->karcis}}</td>
						</tr>
						<tr style="font-size:8px;padding:1px">
							<td style="padding-top: 4px;padding-bottom:3px;">Tarif Poli</td>
							<td style="padding-top: 4px;padding-bottom:3px;">{{ $pb->tarif}}</td>
						</tr>
						<tr style="font-size:8px;padding:1px;font-weight:bold">
							<td>Total </td>
							<td>
								<?php 
								echo  $pb->tarif+ $pb->karcis ?>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
			<h6 style="font-size:7px;text-align:right;margin-top:-15px">Surabaya, <?php echo $date->format("d-m-Y ")?> </h6>
			<img src="img/logo-1.png" class="img-responsive" style="height:40px;position: absolute;right: 100px;margin-top:-45px">
			<h6 style="font-size:7px;text-align:right;margin-top:55px;position: absolute;right: 20px;">{{ $pb->nama_peg}} </h6>
			<h6 style="font-size:7px;text-align:right;margin-top:10px;position: absolute;right: 20px;"> (Staff in Charge) </h6>
	</div>
	<!--isi-->
	<!--script-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	<!--script-->
	</main>
</body>
</html>