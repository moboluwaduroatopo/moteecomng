@extends('layouts.app')

@section('content')
 <!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>About Us</h2>
                  <div class="page_link">
                      <a href="{{ url('/') }}">Home</a>
                      <a href="">About</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start About Us Area =================-->
  <section class="about_area section_gap">
    <div class="container">
      <div class="row justify-content-start align-items-center">
        <div class="col-lg-5">
          <div class="" style="height: 90%;width: 80px">
            <img class="" src="img/images2.jpg" alt="" >
          </div>
        </div>

        <div class="offset-lg-1 col-lg-5">
          <div class="main_title text-left">
            <p class="top_text">About me <span></span></p>
            <h2>
              Computer Science  <br>
              And Software Engineering
            </h2>
            <p>
                ADIO TAWAKALITU ADEWUMI is a guaduate of LADOKE AKINTOLA UNIVERSITY OF TECHNOLOGY(Lautech),Ogbomoso,Nigeria.she guaduated in 2018 and awarded Bachelor of Science in Computer Science.She is a student of SQI ICT Academy with experience of about 4 + years in software developer
            </p>
            <a class="primary_btn" href="#"><span>Download CV</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End About Us Area =================-->
  

  <!--================ Start Testimonial Area =================-->
  <section class="testimonial_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title">
            <p class="top_text">Our Tesitmonial <span></span></p>
            <!-- <h2>Honourable Client Says <br>
              About Me </h2> -->
          </div>
        </div>
      </div>

      <div class="owl-carousel owl-theme testimonial-slider ">
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/daudamon.jpeg" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Dauda Monsuru Olatunji</h4>
                <p><small>Chemical Engineer</small></p>

                <p><!-- Tawakalitu is a guaduate of LADOKE AKINTOLA UNIVERSITY OF TECHNOLOGY(Lautech),Ogbomoso,Nigeria.she guaduated in 2018 and awarded Bachelor of Science in Computer Science.She is a student of SQI ICT Academy with experience of about 4 + years in software developer -->
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <ul class="star_rating mt-4">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="testimonial-item"> -->
         <!--  <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/tawa1.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                <h4>Adio Tawakalitu</h4>
                <p><small>Computer Scientists & Software Engineer</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div> -->
<!-- 
        <div class="testimonial-item">
          <div class="row">
            <div class="col-lg-6">
              <div class="testi-img mb-4 mb-lg-0">
                <img src="img/tawa.jpg" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="testi-right">
                  <h4>Adio Tawakalitu</h4>
                <p><small>Computer Scientists & Software Engineer</small></p>

                <p>Waters can not replenish hath fly and be to brought isn't very days behold without land every above lights us fruitful wherein divide it him fowl moving may beginning subdue fly waters can't replenish hath fly and be to brought isn't very days behold </p>
                <ul class="star_rating mt-3">
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li><span><i class="fas fa-star"></i></span></li>
                  <li class="disable"><span><i class="fas fa-star"></i></span></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div> -->
      <!-- </div> -->
    </div>
  </section>
  <!--================ End Testimonial Area =================-->

@endsection
