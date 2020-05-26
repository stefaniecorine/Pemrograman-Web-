<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Pembayaran</title>
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

    <section id="pembayaran" class="section-padding">
    	<div class="container">
			<div class="col-md-12 col-sm-8">
				<div class="row">	
						<div class="col-md-4 col-sm-4">
								<a class="btn btn-info" role="button" href="/pembayaran">Kembali</a>
								<h3>Edit Data Pembayaran</h3>
								
								@foreach($pembayaran as $pb)
								<form action="/pembayaran/update" method="post" style="color:#282B2F">
								{{ csrf_field() }}
                                    <div class="form-row">
                                        <br>
                                        <div class="form-group col-sm-12">
                                        <label for="tgl_pembayaran">Tanggal pembayaran</label>
                                        <input type="datetime-local" class="form-control"name="tgl_pembayaran" id="tgl_pembayaran" value="{{ $pb->tgl_pembayaran}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <br>
                                        <div class="form-group col-sm-12">
                                        <label for="total_biaya">Total Biaya</label>
                                        <input type="text" class="form-control"name="total_biaya" id="total_biaya" value="{{ $pb->total_biaya}}">
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
		                        @endforeach
                        </div>
                </div>  
            </div>
        </div>
    </section>                          		
</body>
</html>