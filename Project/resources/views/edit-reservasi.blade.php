<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Reservasi</title>
  <link rel = "icon" type = "image/png" href = "img/logo-0.png">
  <link rel = "apple-touch-icon" type = "image/png" href = "img/logo-0.png"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Temrsvate</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website temrsvates, free bootstrap themes, free temrsvate, free bootstrap, free website temrsvate">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

    <section id="reservasi" class="section-padding">
    	<div class="container">
			<div class="col-md-12 col-sm-8">
				<div class="row">	
						<div class="col-md-4 col-sm-4">
								<a class="btn btn-info" role="button" href="/reservasi">Kembali</a>
								<h3>Edit Data Poliklinik</h3>
								
								@foreach($reservasi as $rsv)
								<form action="/reservasi/update" method="post" style="color:#282B2F">
								{{ csrf_field() }}
								<input type="hidden" name="id_reservasi" value="{{ $rsv->id_reservasi}}" required="required"> <br/>
								

                                <div class="form-group">
									<input type="date" class="form-control" id="tgl_layanan" name="tgl_layanan" required="required"
									value="{{ $rsv->tgl_layanan}}" placeholder="Tanggal Layanan">
									<div class="validation"></div>
								</div>


                                <div class="form-group">
									<input type="text" class="form-control" id="id_pasien" name="id_pasien" required="required"
									value="{{ $rsv->id_pasien}}" placeholder="ID Pasien">
									<div class="validation"></div>
								</div>
                                <div class="form-group">
									<input type="text" class="form-control" id="id_petugas" name="id_petugas" required="required"
									value="{{ $rsv->id_petugas}}" placeholder="ID Petugas">
									<div class="validation"></div>
								</div>
								<div class="form-group">
									<label for="jadwal_ke">Jadwal ke</label>
									<select class="form-control" id="jadwal_ke" required="required" id="jadwal_ke" name="jadwal_ke">
										<option selected value="" disable selected></option>
										<option value="1"  >1</option>
										<option value="2"  >2</option>
									</select>
								</div>

                                <div class="form-group row">
									<div class="col-sm-4">
									<button type="submit" class="btn btn-primary" >submit</button>
									</div>
								</div>
                                </form>
		                        @endforeach
                        </div>
                </div>  
            </div>
        </div>
    </section>                          		
</body>
</html>