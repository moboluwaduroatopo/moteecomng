<!DOCTYPE html>
<html lang="en">

<head>
  <title>NUESA &mdash; Nigerian Universities Engineering Students' Association</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('fonts1/icomoon/style.css') }}">
<script src='https://files.codepedia.info/files/uploads/iScripts/html2canvas.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css1/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css1/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css1/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css1/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css1/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css1/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('fonts1/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('css1/aos.css') }}">
  <link href="{{ asset('css1/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('css1/style.css') }}">



</head>
<style>
  input[type="file"] { 
  z-index: -1;
  position: absolute;
  opacity: 0;
}

input:focus + label {
  outline: 2px solid;
  
}
</style>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <!-- <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> --> 
          </div>
          <div class="col-lg-3 text-right">
             
              @guest
              <a href="{{ route('login') }}" class="small mr-3 text-success"><span class="icon-unlock-alt"></span> {{ __('Log In') }}</a>
  
               
                @if (Route::has('register'))
              <a  href="{{ route('register') }}" class="small btn btn-success text-white px-4 py-2 rounded-0"><span class="icon-users"></span> {{ __('Register') }}</a>
  
                   
                @endif
              @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <img src="upload/{{Auth::user()->user_image}}" style="border-radius: 50%;width:50px;height: 50px">  {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
              
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="home">Profile</a>
                         <a class="dropdown-item" href="getidcard">GetId</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
              
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                       
                    </div>
                </li>
              @endguest
            
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="/" class="d-block">
              <img src="{{ asset('images/logon.png') }}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                
                  <a href="/" class="nav-link text-left active">Home</a>
               <a href="chat" class="nav-link text-left">Nuesa Forum</a>
            
                <!-- <li>
                  <a href="getidcard" class="nav-link text-left">IDcard</a>
                </li> --> 
               <div class="btn-group dropleft">
  <a  class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Chapters
  </a>
  <div class="dropdown-menu text-center">
    <!-- Dropdown menu links -->
     <a href="chapters">Reg. Chapter</a>
    <a href="nuesachapters">Nuesa Chapters</a>
   <!--  <a href="comingsoon">Our Interns</a>
    <a href="comingsoon">Our Leadership</a> -->
  </div>
</div>

                  <a href="nuesagallery" class="nav-link text-left">Nuesa Gallery</a>
              
               
                    <a href="recommendation" class="nav-link text-left">Recommend</a>
                  
                    <!-- Default dropleft button -->
    <div class="btn-group dropleft">
  <a href="about" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   About Us
  </a>
  <div class="dropdown-menu text-center">
    <!-- Dropdown menu links -->
    <a href="about">About Nuesa</a>
    <!-- <a href="#news">News</a> -->
    <a href="comingsoon">Our Interns</a>
    <a href="comingsoon">Our Leadership</a>
  </div>
</div>
  <a href="https://api.whatsapp.com/send?phone=2348163279885&text=I am linking from NUESA website." class="nav-link text-left">Contact</a>
<!-- Split dropleft button -->

               
                 
                 
              </ul>                                                                                                                                                                                                                                                                                        
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="https://m.facebook.com/dauda.monsuru.731" target="_blank"><span class="icon-facebook"></span></a>
              <!-- <a href="#"><span class="icon-twitter"></span></a> -->
              <!-- <a href="#"><span class="icon-linkedin"></span></a> -->

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>
<br><br><br><br>
    
 <main class="py-4">
    {{-- <div class="container">
        @include('includes.messages')
      </div> --}}
             @yield('content')
         </main>
         @include('includes.footer')
   


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>
<script>
  var input = document.getElementById( 'file-upload' );
var infoArea = document.getElementById( 'file-upload-filename' );

input.addEventListener( 'change', showFileName );

function showFileName( event ) {
  
  // the change event gives us the input it occurred in 
  var input = event.srcElement;
  
  // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
  var fileName = input.files[0].name;
  
  // use fileName however fits your app best, i.e. add it into a div
  infoArea.textContent = 'File name: ' + fileName;
}
</script>

<script language='javascript'>
$(document).ready(function() {
   // $("#testdiv").hide();
  
// alert();
 var getCanvas; // global variable
 var myImage;
    html2canvas($('.testid'), {
        onrendered: function(canvas) {
            // canvas is the final rendered <canvas> element
            myImage = canvas.toDataURL('image/png');
            getCanvas=canvas;
            window.open(myImage);
        }
    });
    $('#btn-Convert-Html2Image').on('click', function () {
         // alert(images);
    var imgageData = myImage;
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, 'data:application/octet-stream');
    $('#btn-Convert-Html2Image').attr('download', 'nuesa_id_card.png').attr('href', newData);
    });

});
</script>
  <script src="{{ asset('js1/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js1/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js1/jquery-ui.js') }}"></script>
  <script src="{{ asset('js1/popper.min.js') }}"></script>
  <script src="{{ asset('js1/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js1/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js1/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js1/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js1/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js1/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js1/aos.js') }}"></script>
  <script src="{{ asset('js1/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js1/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js1/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ asset('js1/main.js') }}"></script>
  <script src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>