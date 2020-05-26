<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Poli</title>
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

    <section id="poli" class="section-padding">
    	<div class="container">
			<div class="col-md-12 col-sm-8">
				<div class="row">	
						<div class="col-md-4 col-sm-4">
								<a class="btn btn-info" role="button" href="/poli">Kembali</a>
								<h3>Edit Data Poliklinik</h3>
								
								@foreach($poli as $pl)
								<form action="/poli/update" method="post" style="color:#282B2F">
								{{ csrf_field() }}
								<input type="hidden" name="id_poli" value="{{ $pl->id_poli}}" required="required"> <br/>
								<div class="form-group">
									<input type="text" class="form-control" id="nama_poli" name="nama_poli" required="required"
									value="{{ $pl->nama_poli}}" placeholder="Nama Poli">
									<div class="validation"></div>
								</div>

                                <div class="form-group">
									<input type="text" class="form-control" id="no_ruang" name="no_ruang" required="required"
									value="{{ $pl->no_ruang}}" placeholder="Nomor Ruangan">
									<div class="validation"></div>
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