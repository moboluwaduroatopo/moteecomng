  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<link rel="stylesheet"  href="{{ asset('css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ asset('css/style.min.css') }}">

<link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
   <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>
 
<body>
 
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">MOTEE</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        <!--     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Our Produut </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
        
               <a class='dropdown-item' href="/addproduct">Add new product</a>
                <a class='dropdown-item'  href="/product">Product Details</a>
  

        </div>
      </li> -->
    <!--   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          Order </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
        
               <a class='dropdown-item' href="/order">Order list</a>
                <a class='dropdown-item'  href="/orderproduct">Order Details</a>
  

        </div>
      </li>
           -->
           <li class="nav-item">
            <a class="nav-link waves-effect" href="showuser" >User list</a>
          </li>
        <li class="nav-item">
            <a class="nav-link waves-effect" href="forumsetting" >Forum Setting</a>
          </li>
         <li class="nav-item">
            <a class="nav-link waves-effect" href="allchapters" >All Chapters</a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">

         
                  @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
<br><br><br><br><br>
<div class="container">
       @include('includes.messages')
     </div>
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
        <main class="py-4">
            @yield('my-content')
        </main>
    </div>
   <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/mdb.min.js') }}"></script>

  <script type="text/javascript">
    new WOW().init();
  </script>
   <script>

        $(document).ready(function(){
               $('#search').keyup(function(){
            // alert();
               var value = $(this).val().toLowerCase();
               $('#contactTable tr').filter(function(){
                // alert();
                   $(this).toggle($(this).text().toLowerCase().indexOf(value)> -1)
               })
                   });
               });
       </script> 
</body>
</html>
  


 