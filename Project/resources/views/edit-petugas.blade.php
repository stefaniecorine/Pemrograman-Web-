<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pemeriksaan Poliklinik - Edit Data Petugas Medis</title>
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
	<section id="petugas" class="section-padding">
    	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<a class="btn btn-info" role="button" href="/petugas">Kembali</a>
                @foreach($petugas as $pg)
				<form action="/petugas/update" method="post" style="color:#282B2F"> 
				{{ csrf_field() }}
				<br>
                <h3>Edit Data Petugas</h3> <br>
					<div class="form-row">
                    <input type="hidden" name="id_petugas" value="{{ $pg->id_petugas}}" required="required"> <br/>
						<div class="form-group col-sm-5">
						<label for="name">Nama Petugas</label>
						<input type="text" class="form-control" name="nama" id="nama" required="required" value="{{ $pg->nama}}">
						</div>
						<div class="form-group col-sm-5">
						<label for="no_ktp">No KTP</label>
						<input type="text" minlength="16" maxlength="16" class="form-control"name="no_ktp" id="no_ktp" value="{{ $pg->no_ktp}}">
						</div>
					</div>
					<div class="form-group col-sm-10">
						<label for="alamat">Alamat Petugas</label>
						<input type="text" class="form-control" name="alamat" id="alamat" required="required" value="{{ $pg->alamat}}">
					</div>
					<div class="form-row">
						<div class="form-group col-sm-3">
							<label for="tgl_lahir">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required="required" value="{{ $pg->tgl_lahir}}" max="1997-12-31">
						</div>
						<div class="form-group col-sm-3">
							<label for="gender">Gender</label>
							<select name="gender" id="gender" class="form-control" required="required" value="{{ $pg->gender}}">
								<option > </option>
								<option value="Laki-Laki" value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan"value="Perempuan" >Perempuan</option>
							</select>
						</div>
						<div class="form-group col-sm-4">
							<label for="no_telp">No Telepon</label>
							<input type="tel" maxlength="14" class="form-control" id="no_telp" name="no_telp" required="required" value="{{ $pg->no_telp}}">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
						<label for="name">Email</label>
						<input type="email" class="form-control" name="email" id="email" required="required" value="{{ $pg->email}}">
						</div>
						<div class="form-group col-sm-4">
						<label for="password">Password</label>
						<input type="password" minlength="6" maxlength="8" class="form-control" name="password" id="password" required="required" value="{{ $pg->password}}">
						</div>
					</div>
                    <div class="form-row">
						<div class="form-group col-sm-5">
							<label for="tgl_lahir">Spesialisasi</label>
							<input type="text" class="form-control" id="spesialisasi" name="spesialisasi" required="required" value="{{ $pg->spesialisasi}}" >
						</div>
						<div class="form-group col-sm-5">
						<label for="no_telp">Pilih ID Poli</label>
							<select name="id_poli" class="form-control" id="id_poli" required="required">
							<option selected value="" disable selected></option>
							@foreach($poli as $pl)
							<option value="{{$pl->id_poli}}">{{$pl->id_poli}}</option>
							@endforeach
							</select>
						</div>
					</div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                                <label for="waktu_praktek">Waktu Praktek 1</label> 
                        </div>
                        <div class="form-check col-sm-7" required="required"> 
							<select name="waktu_praktek1" id="waktu_praktek1" style="width:100%;border-radius:5px;padding:4px">
								<option> </option>    
								<option value='Senin 09:00-12:00'> Senin 09:00-12:00</option>
								<option value='Senin 13:00-17:00'> Senin 13:00-17:00</option>
								<option value='Senin 19:00-21:00'> Senin 19:00-21:00</option>
								<option value='Selasa 09:00-12:00'>Selasa 09:00-12:00</option>
								<option value='Selasa 13:00-17:00'> Selasa 13:00-17:00</option>
								<option value='Selasa 19:00-21:00'> Selasa 19:00-21:00</option>   
								<option value='Rabu 09:00-12:00'> Rabu 09:00-12:00</option>
								<option value='Rabu 13:00-17:00'> Rabu 13:00-17:00</option>
								<option value='Rabu 19:00-21:00'> Rabu 19:00-21:00</option> 
								<option value='Kamis 09:00-12:00'> Kamis 09:00-12:00</option>
								<option value='Kamis 13:00-17:00'> Kamis 13:00-17:00</option>
								<option value='Kamis 19:00-21:00'> Kamis 19:00-21:00</option> 
								<option value='Jumat 09:00-12:00'> Jumat 09:00-12:00</option>
								<option value='Jumat 13:00-17:00'> Jumat 13:00-17:00</option>
								<option value='Jumat 19:00-21:00'> Jumat 19:00-21:00</option>             
							</select>
							<br> <br>
						</div>
						
					</div>
					
					<div class="form-row">	
						<div class="form-group col-sm-3">
                                <label for="waktu_praktek">Waktu Praktek 2</label> 
                        </div>
                        
                        <div class="form-check col-sm-7" required="required"> 
							<select name="waktu_praktek2" id="waktu_praktek2" style="width:100%;border-radius:5px;padding:4px">
								<option> </option>    
								<option value='Senin 09:00-12:00'> Senin 09:00-12:00</option>
								<option value='Senin 13:00-17:00'> Senin 13:00-17:00</option>
								<option value='Senin 19:00-21:00'> Senin 19:00-21:00</option>
								<option value='Selasa 09:00-12:00'>Selasa 09:00-12:00</option>
								<option value='Selasa 13:00-17:00'> Selasa 13:00-17:00</option>
								<option value='Selasa 19:00-21:00'> Selasa 19:00-21:00</option>   
								<option value='Rabu 09:00-12:00'> Rabu 09:00-12:00</option>
								<option value='Rabu 13:00-17:00'> Rabu 13:00-17:00</option>
								<option value='Rabu 19:00-21:00'> Rabu 19:00-21:00</option>
								<option value='Kamis 09:00-12:00'> Kamis 09:00-12:00</option>
								<option value='Kamis 13:00-17:00'> Kamis 13:00-17:00</option>
								<option value='Kamis 19:00-21:00'> Kamis 19:00-21:00</option> 
								<option value='Jumat 09:00-12:00'> Jumat 09:00-12:00</option>
								<option value='Jumat 13:00-17:00'> Jumat 13:00-17:00</option>
								<option value='Jumat 19:00-21:00'> Jumat 19:00-21:00</option>            
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
	</section>
</body>
</html>