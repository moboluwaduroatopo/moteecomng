@extends('layouts.app')
@section('content')

<div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Recommendation Box</h2>
          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom">
  <div class="container">
    <a href="">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Recommendation Box</span>
  </div>
</div>

<br>
<div class="row col-md-6  justify-content-center">
        @include('includes.messages')
      </div>
 <div class="container">
        <div class="row ">
          <div class="col-lg-7">
            <h2>Recommendation Box</h2>
            
          </div>
          <div class="col-lg-5">

            <!-- <form action="" class="d-flex"> -->
              {!! Form::open(['action'=>'ChaptersController@showrecommend','method' => 'POST','class'=>'d-fle']) !!}
              <input type="text" class="form-control " placeholder="Your Name" name="rname" required><br>
              <input type="number" class="form-control " placeholder="Enter phone" name="rphone" required><br>
              <input type="email" class="form-control " placeholder="Enter email" name="remail" required><br>
             <!--  <input type="text" class="rounded form-control mr-2 py-3" placeholder="Topic" name="name" required> -->
              <textarea type="text" placeholder="Enter Details" rows='3' class="form-control col" id="idf" name="details" required></textarea>
              <button class="btn btn-success text-white rounded py-3 px-4" type="submit">Save Recommend</button>
            <!-- </form> -->
              {!! Form::close() !!}
          </div>
        </div>
      </div>
@endsection