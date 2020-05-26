<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Pasien</title>
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
	
<section id="pegawai" class="section-padding">
    	<div class="container">
			<div class="col-md-12 col-sm-8">
				<div class="row">	
						<div class="col-md-8 col-sm-8">
								<a class="btn btn-info" role="button" href="/pasien">Kembali</a>
								<h3>Edit Data Pasien</h3>
								
								@foreach($pasien as $ps)
								<form action="/pasien/update" method="post" style="color:#282B2F">
								{{ csrf_field() }}
								<input type="hidden" name="id_pasien" value="{{ $ps->id_pasien}}" required="required"> <br/>
								<div class="form-group">
									<label for="nama_pasien" class="form-group" >Nama Pasien</label>
									<input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required="required"
									value="{{ $ps->nama_pasien}}" placeholder="Your name">
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<label for="alamat">Alamat Pasien</label>
									<input type="text" placeholder="Your address" type="text" class="form-control" id="alamat" name="alamat" 
									value="{{ $ps->alamat}}" required="required">
									<div class="validation"></div>
								</div>
								
								<fieldset class="form-group">
									<div class="row">
										<label for="gender"class="col-form-label col-sm-2 pt-0">Gender</label>
												<div class="col-sm-4">
													<div class="form-check">
														<input class="form-check-input" type="radio" name="gender" id="gender" 
														value="Laki-Laki" required="required">
														<label class="form-check-label" for="gender">
															Laki-Laki
														</label>
													</div>
													<div class="form-check">
														<input class="form-check-input" type="radio" name="gender" id="gender" 
														value="Perempuan" required="required">
														<label class="form-check-label" for="gender">
															Perempuan
														</label>
													</div>
												</div>
											</label>
										
									</div>
								</fieldset>

								<div class="form-group">
									<label for="tgl_lahir">Tanggal Lahir</label>
									<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $ps->tgl_lahir}}" required="required" >
								</div>
								<div class="form-group">
									<label for="no_telp">No Telepon</label>
									<input type="text" maxlength="14" class="form-control" id="no_telp" name="no_telp" 
									value="{{ $ps->no_telp}}" required="required" placeholder="Your phone number">
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" data-rule="email" id="email" name="email" 
									value="{{ $ps->email}}"required="required"
									aria-describedby="emailHelp" placeholder="Your Email" />
									<small id="emailHelp" class="form-text text-muted"> We'll never share your email with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" 
									value="{{ $ps->password}}" required="required" placeholder="Your password" minlength="6" maxlength="8">
								</div>
								<div class="form-group row">
									<div class="col-sm-10">
									<button type="submit" class="btn btn-primary" onclick="CheckPassword(document.form1.text1)">submit</button>
									</div>
								</div>
							</form>
	
	@endforeach		
</body>
</html>