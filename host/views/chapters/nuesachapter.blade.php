@extends('layouts.app')
@section('content')
 

 <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
      <div class="row align-items-end justify-content-center text-center">
        <div class="col-lg-7">
          <h2 class="mb-0">Chapter's</h2>
          {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p> --}}
        </div>
      </div>
    </div>
  </div> 


<div class="custom-breadcrumns border-bottom ">
  <div class="container">
    <a href="index.html">Home</a>
    <span class="mx-3 icon-keyboard_arrow_right"></span>
    <span class="current">Chapter's</span>
  </div>
</div>


 <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>NUESA CHAPTERS</span>
            </h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p> -->
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                @foreach ($chap as $d)
                  <div class="course-1-item">
                   <!--  <figure class="thumnail">
                      <a href="course-single.html"><img src="images/course_1.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Mobile Application</h3></div>  
                    </figure> -->
                    <h2 class="text-black text-center">Chapter Name: {{$d->chapter_name}}</h2>
                    <div class="text-center">
                      <!-- <h2>Chapter Name: {{$d->chapter_name}}</h2> -->
                      <p>Chapter Address: {{$d->chapter_address}}</p>
                      <p>Chapter Email: {{$d->chapter_email}}</p>
                      <p>Chapter Abbreviation: {{$d->chapter_abbreviation}}</p>
                      <p>Chapter Phone: {{$d->chapter_phone}}</p>
                      
                      <p>President Name: {{$d->president_name}}</p>
                       <p>President Email: {{$d->president_email}}</p>
                      <p>President Phone: {{$d->president_phone}}</p>
                      
                      
                    </div>
                  </div>
      @endforeach
                 
              </div>
      
          </div>
        </div>

        
        
      </div>
    </div>

@endsection