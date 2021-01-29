<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
 
<script src='https://files.codepedia.info/files/uploads/iScripts/html2canvas.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script>
  <link rel="stylesheet" href="{{ asset('css1/bootstrap.min.css') }}">
 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <body>
 	<div class="container">
 <!-- Card -->
<div class="card" style="color: green;background-color:#ffffff ">

  <!-- Card image -->
  <div class="view overlay">
    <img class="card-img-top" src="{{ asset('images/logon.png') }}"
      alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">Dear  {{ $data['message'] }},</h4>
    <!-- Text -->
    <p class="card-text">hre</p>
    <!-- Button -->
    <!-- <p>Thank you.</p> -->

  </div>

</div>
<!-- Card -->

</div>
<div class="footer">
    <div class="container">
      <div class="row">
<p class="text-center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> LAUTECH MUSLIM GRADUATES ASSOCIATION (LAUMGA). Under the leadership of National Presidents, Comr. DAUDA, Monsuru Olatunji, NMIS.</p>

<p class="text-center">This email was sent to {{ $data['email'] }}
 because it relates to topic in which you expressed an interest or NUESA Publications service you have used.</p>
 <p class="text-center" style="font-size: 18px; align-self: auto; align-content: center; white-space: pre-line; "> Worth remembering:Any actions taken only relate to the email address states above.If you forward this email you may be sharing your personal information with others.Changes will not impact account,service or bill-related communications.</p>
      </div>
  </div>
</div>
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
