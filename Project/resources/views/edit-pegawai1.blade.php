<!DOCTYPE html>
<html>
<head>
	<title>Pemeriksaan Poliklinik - Edit Data Pegawai</title>
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

	<h3>Edit Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pegawai as $pg)
	<form action="/pegawai/update" method="post">
    {{ csrf_field() }}
       
        <input type="hidden" name="id_pegawai" value="{{ $pg->id_pegawai}}" required="required"> <br/>
        Nama<br>
        <input type="text" required="required" name="nama" value="{{ $pg->nama }}" required="required"><br/>
		
        Alamat<br> 
        <textarea name="alamat" required="required" >{{ $pg->alamat}}</textarea><br/>
        
        Gender<br>
        <input type="radio" name="gender"  value="{{ $pg->gender}}" id="laki-laki" required="required">
		<label for="laki-laki">Laki-laki</label><br>
		<input type="radio" name="gender"  value="{{ $pg->gender}}"id=" perempuan" required="required">
		<label for="perempuan">Perempuan</label><br>
	
		Tanggal Lahir <br>
		<input type="date" name="tgl_lahir" value="{{ $pg->tgl_lahir}}"  required="required"> <br/>

        No Telepon<br>
		<input type="text" name="no_telp" value="{{ $pg->no_telp }}"  required="required"><br/>

        Email<br>
		<input type="email" name="email" required="required"></textarea> <br/>

        No KTP<br>
        <input type="int" name="no_ktp" value="{{ $pg->no_ktp }}" required="required"></textarea> <br/>
		<input type="submit" value="Update Data">
	</form>
	@endforeach
		
</body>
</html>