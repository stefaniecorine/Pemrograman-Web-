<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Pemeriksaan</title>
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

    <section id="pemeriksaan" class="section-padding">
    	<div class="container">
			<div class="col-md-12 col-sm-8">
				<div class="row">	
						<div class="col-md-4 col-sm-4">
								<a class="btn btn-info" role="button" href="/pemeriksaan">Kembali</a>
								<h3>Edit Data pemeriksaan</h3>
								
								@foreach($pemeriksaan as $pm)
								<form action="/pemeriksaan/update" method="post" style="color:#282B2F">
								{{ csrf_field() }}
                                <div class="form-row">
                                    <br>
                                    <input type="hidden" name="id_pemeriksaan" value="{{ $pm->id_pemeriksaan}}" required="required"> <br/>
                                    <div class="form-group col-sm-12">
                                    <label for="tgl_pemeriksaan">Tanggal Pemeriksaan</label>
                                    <input type="datetime-local" class="form-control"name="tgl_pemeriksaan" id="tgl_pemeriksaan" value="{{ $pm->tgl_pemeriksaan}}" required="required">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <br>
                                    <div class="form-group col-sm-12">
                                    <label for="keluhan">Keluhan</label>
                                    <input type="text" class="form-control"name="keluhan" id="keluhan" value="{{ $pm->keluhan}}" required="required">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="catatan_medis">Catatan Medis</label>
                                        <input type="text" class="form-control" name="catatan_medis" id="catatan_medis" required="required" value="{{ $pm->catatan_medis}}" >
                                    </div>
                                    <div class="form-group col-sm-12">
                                    <label for="id_pembayaran">Pilih ID Pembayaran</label>
                                        <select name="id_pembayaran" class="form-control" id="id_pembayaran" required="required">
                                        <option selected value="" disable selected></option>
                                        @foreach($pembayaran as $pb)
                                        <option value="{{$pb->id_pembayaran}}">{{$pb->id_pembayaran}}</option>
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