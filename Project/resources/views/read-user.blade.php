<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Surabaya Health Care</title>
  <link rel = "icon" type = "image/png" href = "img/logo-0.png">
  <link rel = "apple-touch-icon" type = "image/png" href = "img/logo-0.png"/>

  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo-1.png" class="img-responsive" style="height:60px; margin-top: -16px;"></a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class=""><a href="#banner">Home</a></li>
                <li class=""><a href="#cta-1">Info</a></li>
                <li class=""><a href="#contact">Contact</a></li>
                <li class=""><a href="/jadwal-dokter">Jadwal Dokter</a></li>
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Hi, {{Session::get('nama_pasien')}}! <span class="caret"></span></a>
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
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-text text-left">
              <h1 class="white" style="font-family: 'Lucida Sans Unicode', serif;font-size:50px"> Surabaya Health Care</h1>
                  <div class="col-md-8">
                    <p style="font-family:'Trebuchet MS', Helvetica, sans-serif; letter-spacing: 3px;text-align:justify;font-weight:500;color:#282726"> 
                      Selamat datang di  Official Website Surabaya Health Care. Kami senantiasa berupaya meningkatkan kualitas 
                      pelayanan disemua bidang secara berkesinambungan.Merupakan suatu tanggung jawab dan komitmen bagi kami 
                      untuk selalu mengedepankan keselamatan pasien, kepuasan pelanggan serta perbaikan yang berkesinambungan. 
                    </p>
                  </div>
                  <div class="col-md-12">
                    <a href="#top" class="btn btn-appoint" style="background-color: #5F473B">Know More about Us</a>
                  </div>
                  
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>
  <!--/ banner-->


  <!--top priority-->
  <div style="background-image:url('../img/bg-banner1.jpg')">
  <section id="pasien" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title" style="font-size: 30px;color:#422606">Our Priority</h2>
          <hr class="botm-line">
          <p style="color:black">Berkomitmen untuk selalu menghadirkan pelayanan yang terbaik kepada setiap pasien melalui kinerja pegawai dan tenaga medis yang terbaik dan berintegritas tinggi.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4 style="font-size:23px;color:#422606">24 Hour Support</h4>
              <p style="color:black"> SHC siap melayani kebutuhan pasien 24/7 dengan pelayanan medis yang terbaik.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
            <br>
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4 style="font-size:23px;color:#422606">Emergency Services</h4>
              <p style="color:black"> Setiap panggilan emergency bisa menghubungi nomor berikut : <div style="color:black">(081-9907659029)</div></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4 style="font-size:23px;color:#422606">Medical Counseling</h4>
              <p style="color:black"> Konsultasikan keluhan anda dengan tenaga medis kami yang siap melayani anda semaksimal mungkin.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4 style="font-size:23px;color:#422606">Premium Healthcare</h4>
              <p style="color:black">Poliklinik kami menggunakan teknologi terbaru dan peralatan medis yang terjamin kualitasnya. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <!--/ top priority-->
  
  <!--cta-->
  <div style="background-image:url('../img/bg-poli2.jpg')">
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>How to Reach Us </h3>
              <p>Alamat: <br> Jl. Nginden Intan Barat No.B, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118 </p>
              <br>
              <a href="#contact" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Top Services</h3>
              <p>Selain pelayanan medis dasar, poliklinik kami memiliki beberapa layanan unggulan yang secara khusus ditangani oleh spesialis ahli dan sesuai dengan perkembangan ilmu dan teknologi kesehatan.  </p>
              <a href="#top" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <h4 style="color:white;font-size:17px">Senin-Jumat</h4>
              <table style="margin: 8px 0px 0px">
                <tbody>
                  <tr>
                    <td>Shift 1</td>
                    <td>09.00 - 12.00</td>
                  </tr>
                  <tr>
                    <td>Shift 2</td>
                    <td>13.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>Shift 3</td>
                    <td>19.00 - 21.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <!--cta-->
  <!--top services-->
  <div style="background-image:url('../img/bg-banner2.jpg')">
  <div class="bg-color" style="background-color: RGBA(227, 220, 184 ,0.4) ">
  <section id="top" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">Our <br>Specialty</h2>
            <hr class="botm-line">
            <p class="sec-para" style="color:#141615">Selain pelayanan medis dasar, poliklinik kami memiliki beberapa layanan unggulan yang secara khusus ditangani oleh 
              spesialis ahli dan sesuai dengan perkembangan ilmu dan teknologi kesehatan. </p>
            <a href="#doctor-team" style="color: #EC8121; padding-top:10px;font-weight:1000">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-5 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-heartbeat" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Poli Jantung</h3>
                <p style="color:#141615">Didukung oleh tenaga medis (seperti dokter jantung dan dokter bedah jantung), paramedis dan petugas non-medis yang profesional.
                 <br><br>Pusat layanan jantung dan pembuluh darah ini dilengkapi oleh peralatan modern yang dioperasikan oleh dokter jantung dan dokter bedah jantung terlatih setara dengan pelayanan rumah sakit jantung.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-child" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Poli Anak</h3>
                <p style="color:#141615">Anak anda berhak untuk mendapatkan layanan kesehatan yang terbaik. <br><br>Pemantauan Perkembangan dan pertumbuhan anak-anak dapat dilakukan secara berkala,manfaatkan layanan dokter spesialis 
                anak yang ada di SHC dengan suasana bermain dan menyenangkan untuk anak anda.</p>
              </div>
            </div>
          </div>
          <div style="visibility: visible;" class="col-sm-5 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-stethoscope" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Poli THT</h3>
                <p style="color:#141615">Jika dipikirkan sekilas, kotoran telinga tampak sebagai masalah yang sederhana. 
                Tetapi sesuatu yang sederhana tersebut akan menimbulkan masalah yang lebih rumit ketika tidak ditangani dengan benar. 
                <br> <br> Dokter spesialis THT kami siap menangani keluhan anda baik dari aspek medis maupun pembedahan.</p>
                
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-user-md" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>Poli Spesialis Dalam</h3>
                <p style="color:#141615">Karena kompleksnya masalah kesehatan pada dewasa, Penyakit Dalam adalah disiplin ilmu yang memiliki banyak subspesialistik, 
                seperti bagian alergi-imunologi, darah dan keganasannya, penyakit hati/liver, penyakit ginjal, endokrin (diabetes mellitus, hipertiroid), atau bagian tropik-infeksi. 
                <br><br>Dokter spesialis penyakit dalam seringkali disebut sebagai “doctor’s doctor” karena peran mereka sebagai konsultan dalam satu team medis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  </div>
  <!--/ top services-->
  <!--doctor team-->
  <div style="background-image:url('../img/bg-banner3.jpg')">
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Meet Our Doctors!</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor1.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Ricky Samuel</h3>
              <p>Dokter Jantung</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" style="color:#0cb8b6"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Aileen Gabrielle</h3>
              <p>Dokter Spesialis Dalam</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" style="color:#0cb8b6"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Christian Geraldo</h3>
              <p>Dokter Anak</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" style="color:#0cb8b6"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Synrivia Christina</h3>
              <p>Dokter THT</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" style="color:#0cb8b6"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" style="color:#0cb8b6"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>
  <!--/ doctor team-->
  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">See what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p style="color:#fff">Pelayanan sangat memuaskan. Baik staff dan dokter semua bekerja dengan sepenuh hati dengan biaya praktik yang sangat terjangkau.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Lee<span>Sugiono</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p style="color:#fff">Kenyamanan dan kebersihan poli sangat terjamin. Alat yang digunakan juga canggih dan petugas sangat profesional.
            Saya sangat puas dengan poli SHC.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb2.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Ji<span>Muljono</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p style="color:#fff">Anak saya sangat dan tidak menangis sama sekali saat harus bertemu dokter. 
            Tidak seperti pergi ke poli, suasana sangat mendukung untuk anak-anak.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb3.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Kim<span>Prakoso</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  
  <!--contact-->
  <div style="background-image:url('../img/bg-banner5.jpg')">
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Find Us Here</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p style="color:black"><i class="fa fa-map-marker fa-fw pull-left fa-2x" style="color:#E3BF96;"></i> Jl. Nginden Intan Barat No.B, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, <br> Jawa Timur 60118</p>
          <div class="space"></div>
          <p style="color:black"><i class="fa fa-envelope-o fa-fw pull-left fa-2x" style="color:#E3BF96;"></i>info@sbyhealthcare.com</p>
          <div class="space"></div>
          <p style="color:black"><i class="fa fa-phone fa-fw pull-left fa-2x" style="color:#E3BF96;"></i>+821 735 612 999</p>
        </div>
        <img src="img/bg-banner0.jpg"  width="600" height="350">
  </section>
  </div>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p> Poliklinik dengan kualitas pelayanan terbaik, termutakhir, terpasti se-Indonesia </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="https://www.healthline.com/"><i class="fa fa-circle"></i>Health Line</a></li>
                <li><a href="https://www.kemkes.go.id/"><i class="fa fa-circle"></i>Kementerian Kesehatan RI</a></li>
                <li><a href="https://dinkes.jatimprov.go.id/"><i class="fa fa-circle"></i>Dinas Kesehatan Provinsi Jatim</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
              <h5 class="white"> [ coming soon ] </h5>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line" style="background-color:#29302E">
      <div class="container" >
        <div class="row">
          <div class="col-md-12 text-center" style="font-size:13px">
            © Copyright Surabaya Health Service Theme. All Rights Reserved
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Medilab
              -->
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->
  
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-up"></i></button>
 
  
  <script>
 
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

  </script>
      
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  

</body>

</html>