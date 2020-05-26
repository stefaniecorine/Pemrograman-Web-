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
        <div class="container" style="margin-top:180px;margin-bottom:150px">
            <form  action="/reservasi-user/store" id="booking-form" class="booking-form" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-date-to">
                        <label for="tgl_layanan">Tanggal Layanan</label>
                        <input type="date" required="required" name="tgl_layanan" id="tgl_layanan" class="date_to" min='1899-01-01' />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-destination">
                        <label for="id_petugas">Nama Dokter</label>
                        <select type="text" id="id_petugas" name="id_petugas" required="required" >
						<option selected value="" disable selected></option>
							@foreach($petugas as $pg)
                        <option  
                            value="{{$pg->id_petugas}}">{{$pg->nama}}</option>
							@endforeach
                        </select>
                    </div>
                    
                    <div class="form-quantity">
                        <label for="quantity">Jadwal Ke</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="jadwal_ke" id="quantity" value="1"  class="nput-text qty text" required="required">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                    <div class="form-quantity" style="width: 100px;">
                        <label for="quantity">Tarif Karcis</label>
                        <input disabled type="text" id="karcis" name="karcis" value='10000' class="nput-text qty text">
                    </div>
                        <div class="form-submit">
                        <button type="submit" id="submit" class="submit"> SUBMIT 
                        </button>
                         </div>
                </div>
                <h5 style="font-weight:100;font-size:13px;margin-top:5px; font-style: italic;color:#fff">*pastikan tanggal yang Anda pilih sesuai dengan jam praktik dokter </h5>
            </form>
        </div>
        <!--tabel kedua-->
        <div class="container" style="margin-top:-100px" >
            <div class="col-md-12 col-sm-12">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
            <h3> Tabel Reservasi {{Session::get('nama_pasien')}} </h3>  
              <table style="margin: 8px 0px 0px;text-align:center;width:100%" class="table-bordered">
                <tbody>
                  <tr>  
                        <th scope="col" style="text-align:center">ID Reservasi</th>
                        <th scope="col" style="text-align:center">Tanggal Reservasi</th>
						<th scope="col" style="text-align:center">Tanggal Layanan</th>
                        <th scope="col" style="text-align:center">Nama Poli</th>
                        <th scope="col" style="text-align:center">Nama Petugas Medis</th>
						<th scope="col" style="text-align:center">Jadwal ke</th>
                  </tr>
                  @foreach($reservasi as $rsv)
                  <tr>  
                        <td>{{ $rsv->id_reservasi }}</td>
                        <td>{{ $rsv->tgl_reservasi }}</td>
						<td>{{ $rsv->tgl_layanan }}</td>
                        <td>{{ $rsv->nama_poli }}</td>
						<td>{{ $rsv->nama}}</td>
						<td>{{ $rsv->jadwal_ke}}</td>                        
                  </tr>
                  @endforeach
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
        <!--table ke2-->

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