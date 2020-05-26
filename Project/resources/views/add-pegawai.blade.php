<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Tambah Data Pegawai</title>
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
	<section id="pegawai" class="section-padding">
    	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<a class="btn btn-info" role="button" href="/pegawai">Kembali</a>
				<form action="/pegawai/store" method="post" style="color:#282B2F"> 
				{{ csrf_field() }}
				<h3>Tambah Data Pegawai</h3>
					<div class="form-row">
						<div class="form-group col-sm-6">
						<label for="name">Nama Pegawai</label>
						<input type="text" class="form-control" name="nama_peg" id="nama_peg" required="required">
						</div>
						<div class="form-group col-sm-4">
						<label for="no_ktp">NO KTP</label>
						<input type="text" minlength="16" maxlength="16" title="16 Digit No KTP" class="form-control" name="no_ktp" id="no_ktp" required="required">
						</div>
					</div>
					<div class="form-group col-sm-10">
						<label for="alamat">Alamat Pegawai</label>
						<input type="text" class="form-control" name="alamat" id="alamat" required="required">
					</div>
					<div class="form-row">
						<div class="form-group col-sm-3">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required="required" max="1999-12-31" >
						</div>
						<div class="form-group col-sm-3">
							<label for="gender">Gender</label>
							<select name="gender" id="gender" class="form-control" required="required">
								<option > </option>
								<option value="Laki-Laki" >Laki-Laki</option>
								<option value="Perempuan" >Perempuan</option>
							</select>
						</div>
						<div class="form-group col-sm-4">
							<label for="no_telp">No Telepon</label>
							<input type="number" maxlength="14" class="form-control" id="no_telp" name="no_telp" required="required">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
						<label for="name">Email</label>
						<input type="email" class="form-control" name="email" id="email" required="required">
						</div>
						<div class="form-group col-sm-4">
						<label for="password">Password</label>
						<input type="password" minlength="6" maxlength="8" class="form-control" name="password" id="password" required="required">
						</div>
					</div>
					<div class="form-group col-sm-10">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
		</div>
	</section>
</body>
</html>