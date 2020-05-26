<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Tambah Data Pembayaran</title>
  <link rel = "icon" type = "image/png" href = "img/logo-0.png">
  <link rel = "apple-touch-icon" type = "image/png" href = "img/logo-0.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
 
<body>	
	<section id="pembayaran" class="section-padding">
    	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<a class="btn btn-info" role="button" href="/pembayaran">Kembali</a>
				<form action="/pembayaran/store" method="post" style="color:#282B2F"> 
				{{ csrf_field() }}
				<h3>Tambah Data Pembayaran</h3>
					<div class="form-row">
						<br>
						<div class="form-group col-sm-12">
						<label for="tgl_pembayaran">Tanggal pembayaran</label>
						<input type="datetime-local" class="form-control"name="tgl_pembayaran" id="tgl_pembayaran" min="today" max="today">
						</div>
					</div>
                
					<div class="form-row">
                        <div class="form-group col-sm-12">
						<label for="no_telp">Pilih ID Reservasi</label>
							<select name="id_reservasi" class="form-control" id="id_reservasi" required="required">
							<option selected value="" disable selected></option>
							@foreach($reservasi as $rsv)
							<option value="{{$rsv->id_reservasi}}">{{$rsv->id_reservasi}}</option>
							@endforeach
							</select>
                        </div>
						<div class="form-group col-sm-12">
						<label for="id_pegawai">Pilih ID Pegawai</label>
							<select name="id_pegawai" class="form-control" id="id_pegawai" required="required">
							<option selected value="" disable selected></option>
							@foreach($pegawai as $pg)
							<option value="{{$pg->id_pegawai}}">{{$pg->id_pegawai}}</option>
							@endforeach
							</select>
						</div>	
					</div>
					
					<div class="form-group col-sm-10">
						<button type="submit" class="btn btn-primary">submit</button>
					</div>
				</form>
			</div>
			<div class="col-sm-7">
			</div>
		</div>
		</div>
	</section>
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
			document.getElementById("tgl_pembayaran").setAttribute("max", today);
	</script>
</body>
</html>