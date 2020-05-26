<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data pegawai</title>
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
			<div class="col-md-12 col-sm-10">
				<div class="row">	
						<div class="col-md-8 col-sm-12">
								<a class="btn btn-info" role="button" href="/pegawai">Kembali</a>
								<h3>Edit Data pegawai</h3>
								
								@foreach($pegawai as $pg)
								<form action="/pegawai/update" method="post" style="color:#282B2F">
                                {{ csrf_field() }}
                                <div class="form-row">
                                    <input type="hidden" class="form-control" name="id_pegawai" value="{{ $pg->id_pegawai}}" required="required"> <br/>
                                    <div class="form-group col-sm-6">
                                        <label for="nama_peg" class="form-group" >Nama Pegawai</label>
                                        <input type="text" class="form-control" required="required" name="nama_peg" value="{{ $pg->nama_peg}}" required="required"><br/>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="alamat" class="form-group" >Alamat</label> 
                                        <input type="text" class="form-control" name="alamat" required="required" value="{{$pg->alamat}}">
                                    </div>
                                </div> 
                                <div class="form-row">   
                                <fieldset class="form-group col-sm-12">
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
                                                        value="Perempuan" required="required" >
														<label class="form-check-label" for="gender">
															Perempuan
														</label>
													</div>
												</div>
											</label>
										
									</div>
								</fieldset>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                            <label for="tgl_lahir" class="form-group" >Tanggal Lahir</label>
                                            <input type="date"  class="form-control" name="tgl_lahir" value="{{ $pg->tgl_lahir}}"  required="required" max="1999-12-31">
                                    </div>
                                
                                    <div class="form-group col-sm-6">
                                        <label for="no_telp" class="form-group" >No Telepon</label>
                                        <input type="text" class="form-control" name="no_telp" value="{{ $pg->no_telp }}"  required="required">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="Email"> Email</label>
                                        <input type="email" class="form-control"  name="email" value="{{ $pg->email }}" required="required"></textarea> 
                                    </div>
                            
                                    <div class="form-group col-sm-6">
                                    <label for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password" 
									value="{{ $pg->password}}" minlength="6" maxlength="8" required="required" >
                                    </div>

                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="no_ktp" class="form-group" >No KTP</label>
                                        <input type="text" minlength="16" maxlength="16"  title="16 Digit nomor KTP" name="no_ktp" class="form-control" value="{{ $pg->no_ktp }}" required="required">
                                    </div>
                                   
                                    <div class="form-group col-sm-8">
						                <button type="submit" class="btn btn-primary">submit</button>
					            </div>
                                </form>
	
	                            @endforeach		
</body>
</html>