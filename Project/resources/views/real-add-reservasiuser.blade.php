<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Tambah Data Reservasi</title>
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
	<section id="reservasi" class="section-padding">
    	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<a class="btn btn-info" role="button" href="/user">Kembali</a>
				<form action="/reservasi-user/store" method="post" style="color:#282B2F"> 
				{{ csrf_field() }}
				<h3>Tambah Data reservasi</h3>
					<div class="form-row">
						<br>
						<div class="form-group col-sm-12">
						<label for="tgl_reservasi">Tanggal Reservasi</label>
						<input type="datetime-local" class="form-control"name="tgl_reservasi" id="tgl_reservasi">
						</div>
					</div>
                    <div class="form-row">
						<br>
						<div class="form-group col-sm-12">
						<label for="tgl_layanan">Tanggal Layanan</label>
						<input type="date" class="form-control"name="tgl_layanan" id="tgl_layanan">
						</div>
					</div>
					<div class="form-row">
                       
						<div class="form-group col-sm-12">
						<label for="id_petugas">Pilih Nama Dokter</label>
							<select name="id_petugas" class="form-control" id="id_petugas" required="required">
							<option selected value="" disable selected></option>
							@foreach($petugas as $pg)
							<option value="{{$pg->id_petugas}}">{{$pg->nama}}</option>
							@endforeach
							</select>
						</div>	
						
						<div class="form-group col-sm-12">
								<label for="jadwal_ke">Jadwal ke</label>
								<select class="form-control" required="required" id="jadwal_ke" name="jadwal_ke">
									<option selected value="" disable selected></option>
									<option value="1"  >1</option>
									<option value="2"  >2</option>
								</select>
						</div>
						
						<div class="form-group col-sm-12">
								<label for="karcis">Tarif Karcis</label>
								<input disabled class="form-control" required="required" id="karcis" name="karcis" value='10000'>
								
						</div>
						
					</div>
					
					<div class="form-group col-sm-10">
						<button onclick="MyFunction" type="submit" class="btn btn-primary">submit</button>
					</div>
				</form>
			</div>
			<div class="col-sm-7">
			</div>
		</div>
		</div>
	</section>

	<script>
		/* When the user clicks on the button,
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
		}

		function filterFunction() {
		var input, filter, ul, li, a, i;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		div = document.getElementById("myDropdown");
		a = div.getElementsByTagName("a");
		for (i = 0; i < a.length; i++) {
			txtValue = a[i].textContent || a[i].innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
			a[i].style.display = "";
			} else {
			a[i].style.display = "none";
			}
		}
		}
	</script>

	
</body>
</html>