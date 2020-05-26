<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="img/logo-0.png">
	<link rel="apple-touch-icon" type="image/png" href="img/logo-0.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHC - Reservasi Pasien</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/form1/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="/form1/vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/form1/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    label,h3 {
    color: #fff ;
    }
    </style>
</head>
<body>
     <!--banner-->

    
         <!--banner2-->
        <nav class="navbar navbar-default navbar-fixed-top" style="height:60px">
            <div class="container" style="margin-top:10px;background:none">
            <div class="col-md-12">
                <div class="navbar-collapse navbar-right" id="myNavbar">
                <ul class="nav navbar-nav" style="display:inline">
                    <li class=""><a href="/user">Home</a></li>
                    <li class=""><a href="/jadwal-dokter">Jadwal Dokter</a></li>
                    <li  class="dropdown active">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hi, {{Session::get('nama_pasien')}}! </a>
                    <ul class="dropdown-menu">
                        <li><a href="/user-profile">Your Profile</a></li>
                        <li><a href="/reservasi-user/add_data">Your Reservations</a></li>
                        <li><a href="/logout">Log Out</a></li>
                    </ul>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </nav>
        <!--/ banner2-->
    
  

    <!--/ banner-->
    <!--form-->
    
    <div class="main">
        <div class="container" style="margin-top:180px;width:600px">
        <h3 style="text-align:center"> Reservasi atas nama {{Session::get('nama_pasien')}} Berhasil</h3>  
        <h5 style="text-align:center;color:white;letter-spacing:1.5px; line-height: 1.6">Reservasi anda telah tersimpan. Lakukan pembayaran di kasir SHC pada hari layanan untuk mendapatkan nomor antrian. 
        Reservasi akan hangus jika pada tanggal layanan yang dipilih tidak terjadi transaksi pembayaran.
			</h5>
        </div>
        <a href="/reservasi-user/add_data" type="submit" id="submit" class="submit" style="position:relative;left:600px;top:-230px"> BACK RESERVATIONS PAGE</a>
    
    </div>
    <!--form-->
   
    <!-- JS -->
 
    <script>
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth() + 1; //January is 0!
			var yyyy = today.getFullYear();
			if (dd < 10) {
				dd = '0' + dd
			}
			if (mm < 10) {
				mm = '0' + mm
			}

			today = yyyy + '-' + mm + '-' + dd;
			document.getElementById("tgl_layanan").setAttribute("min", today);
	</script>

    <script src="/form1/vendor/jquery/jquery.min.js"></script>
    <script src="/form1/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="/form1/js/main.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/custom.js"></script>
  <script src="/contactform/contactform.js"></script>
  
</body>
</html>