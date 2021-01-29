<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo2.jpg" type="image/png">
  <title>motee- Adio Tawakalitu</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!--================ Start Header Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html">
            <img src="img/logo2.jpg" alt="" style="width: 50px;height: 50px"> </a>
          <a class="navbar-brand logo_inner_page" href="{{ url('/') }}"><img src="img/logo2.jpg" alt=""></a>      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
           aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav">
              <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ url('/portfolio') }}">Portfolio</a></li>
              
              
              <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!--================ End Header Area =================-->
 @yield('content')
 
  <!--================Footer Area =================-->
  <footer class="footer_area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="footer_top flex-column">
            <div class="footer_logo">
              <h3>
                Get a website that looks amazing and actually works.
                <!-- <img src="img/logo2.png" alt=""> -->
              </h3>
              <div class="d-lg-block d-none">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
                  <div class="collapse navbar-collapse offset">
                    <ul class="nav navbar-nav menu_nav mx-auto">
                      <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Home</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="{{ url('/about') }}">About</a></li>
                      <li class="nav-item"><a class="nav-link text-white" href="{{ url('/portfolio') }}">Portfolio</a></li>
                      
                      <li class="nav-item"><a class="nav-link text-white" href="{{ url('/contact') }}">Contact </a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
            <div class="footer_social mt-lg-0 mt-4">
               <a href="https://www.linkedin.com/in/tawakalitu-adio-6226b419b"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=2347069176577"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/motee0112/"><i class="ti-instagram"></i></a>
                <a href="https://web.facebook.com/adio.tawakalitu"><i class="ti-facebook"></i></a>
                <a href="mailto:moboluwaduro0112@gmail.com"><i class="ti-email"></i></a>
              <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-skype"></i></a>
              <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row footer_bottom justify-content-center">
        <p class="col-lg-8 col-sm-12 footer-text">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <!-- All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
  <!--================End Footer Area =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>