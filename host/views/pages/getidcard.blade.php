@extends('layouts.app')

@section('content')


 <div class='container' >
 	<!-- <img src="images/Nidcard.jpg"> -->
<div id='testdiv'
style="background-image: url('images/idcard.jpg');  background-size: cover; background-repeat: no-repeat;height: 900px;width: 580px;padding-left: 25px; padding-top: 10px;" class="testid">
<!-- <div style="margin-left: 70px;margin-top: 300px" class="row">
<img src="upload/52%{{Auth::user()->user_image}}"  style='width: 200px;height:200px;border-radius: 65%;'>

</div> -->
<div class="row justify-center">
	<div class="col-md-12" style="margin-left: 57px;margin-top: 285px">
<img src="upload/{{Auth::user()->user_image}}"  style='width: 225px;height:225px;border-radius: 90%;'>
	</div>
	<div class="col-md-12" style="margin-top: 30px;height: 30px">
  <h4 class="text-uppercase text-center" style="color: #020302;font-family:Arial Rounded MT;font-size: 30px">{{Auth::user()->name}}
 </h4>
	</div>
	
	<div class="col-md-12" style="margin-top: 85px; margin-left:200px;position: relative;">
  <h4 class=" text-uppercase" style="color: #020302;font-family:Arial Rounded MT;font-size: 30px"> {{Auth::user()->chapter_name}}</h4>
	</div>
	<div class="col-md-12" style="margin-top: 8px; margin-left:200px">
  <h4 class=" text-uppercase" style="color: #040504;font-family:Arial Rounded MT;font-size: 30px">{{Auth::user()->matricno}}</h4>
</div>
<div class="col-md-12" style="margin-top: 6px; margin-left:200px">
  <h4 class=" text-uppercase" style="color: #03160B;font-family:Arial Rounded MT;font-size: 30px">{{Auth::user()->origin}}</h4>
</div>
<div class="col-md-12" style="margin-top: ;margin-left: 100px">
  <h4 class="text-center text-uppercase" style="color: #03160B;font-family:Arial Rounded MT;font-size: 30px">{{Auth::user()->phone}}</h4>
</div>
	
</div>

</div>
 <a id='btn-Convert-Html2Image' class="btn blue-gradient">Download</a>
</div>
<div>
  <a class="btn blue-gradient" href="images/IDBACK.jpg" download>Download NUESA BACK ID CARD</a>
  <!-- <img src="images/IDBACK.jpg" style="height: 300px">  -->
</div>
@endsection
