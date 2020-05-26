<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Tambah Data Pemeriksaan</title>
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
	<section id="pemeriksaan" class="section-padding">
    	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<a class="btn btn-info" role="button" href="/pemeriksaan">Kembali</a>
				<form action="/pemeriksaan/store" method="post" style="color:#282B2F"> 
				{{ csrf_field() }}
				<h3>Tambah Data Pemeriksaan</h3>
					<div class="form-row">
						<br>
						<div class="form-group col-sm-12">
						<label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
						<input type="datetime-local" class="form-control"name="tgl_pemeriksaan" id="tgl_pemeriksaan">
						</div>
					</div>
                    <div class="form-row">
						<br>
						<div class="form-group col-sm-12">
						<label for="keluhan">Keluhan</label>
						<input type="text" class="form-control"name="keluhan" id="keluhan">
						</div>
					</div>
					<div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="id_reservasi">Catatan Medis</label>
                            <input type="text" class="form-control" name="catatan_medis" id="catatan_medis" required="required">
                        </div>
						<div class="form-group col-sm-12">
							<label for="id_pegawai">ID Pembayaran</label>
							<input type="text" class="form-control" id="id_pembayaran" name="id_pembayaran" required="required" >
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
</body>
</html>