@extends('layouts.app')

@section('content')



<!--================ Start Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6">
            <div class="banner_content">
              <h3>Hey !</h3>
              <h2 class="text-uppercase">I am Adio tawakalitu</h2>
              <h5 class="text-uppercase">Computer Scientists
              & Software Engineer</h5>
              <div class="social_icons my-5">
                <a href="https://www.linkedin.com/in/tawakalitu-adio-6226b419b"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://api.whatsapp.com/send?phone=2347069176577"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/motee0112/"><i class="ti-instagram"></i></a>
                <a href="https://web.facebook.com/adio.tawakalitu"><i class="ti-facebook"></i></a>
                <a href="mailto:moboluwaduro011@gmail.com"><i class="ti-email"></i></a>
              </div>
              <a class="primary_btn" href="{{ url('/contact') }}"><span>Contact Us</span></a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="home_right_img">
              <img class="img-fluid" src="img/banner/home.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Home Banner Area =================-->

<!--================ Start Statistics Area =================-->
  <section class="statistics_area">
    <div class="container">
      <div class="row justify-content-lg-start justify-content-center">
        <div class="col-lg-2 col-md-3">
          <div class="statistics_item">
            <h3><span class="counter">2</span>+</h3>
            <p>Happy Customer</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="statistics_item">
            <h3><span class="counter">4</span>+</h3>
            <p>Years of Experience</p>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="statistics_item">
            <h3><span class="counter">9</span>/10</h3>
            <p>Average Rating</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Statistics Area =================-->

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
              Computer Scientists  <br>
              And Software Engineer
            </h2>
            <p>
           ADIO TAWAKALITU ADEWUMI is a guaduate of LADOKE AKINTOLA UNIVERSITY OF TECHNOLOGY(Lautech),Ogbomoso,Nigeria.she guaduated in 2018 and awarded Bachelor of Science in Computer Science.She is a student of SQI ICT Academy with experience of about 4 + years in software developer ...
            </p>
            <a class="primary_btn" href="{{ url('/upload/ADIO, TAWAKALITU ADEWUMI RESUME 2.pdf') }}" target="_blank"><span>Download CV</span></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End About Us Area =================-->

  <!--================ Start Features Area =================-->
  <section class="services_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title">
            <p class="top_text">Our Service <span></span></p>
            <h2>What Service We <br>
              Offer For You </h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="service_item">
            <img src="img/services/s1.png" alt="">
            <h4>Web Development</h4>
            <p>Web development is the work involved in developing a web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.</p>
            <!-- <a href="#" class="primary_btn2 mt-35">Learn More</a> -->
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="service_item">
            <img src="img/services/s2.png" alt="">
            <h4>UX/UI Design</h4>
            <p>User experience design is the process of enhancing user satisfaction with a product by improving the usability, accessibility, and desirability provided in the interaction with a product</p>
            <!-- <a href="#" class="primary_btn2 mt-35">Learn More</a> -->
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="service_item">
            <img src="img/services/s3.png" alt="">
            <h4>Web Design</h4>
            <p>Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization</p>
            <!-- <a href="#" class="primary_btn2 mt-35">Learn More</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Features Area =================-->


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


       <!--  <div class="testimonial-item">
          <div class="row">
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

        <!-- <div class="testimonial-item">
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
      </div>
    </div>
  </section>
  <!--================ End Testimonial Area =================-->





  <!--================ Start Blog Area =================-->
  <section class="blog-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title">
            <p class="top_text">Our Portfolio <span></span></p>
            <h2>Check My 
            Project </h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/cash/1.png" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#"><i class="ti-user"></i> Admin post</a>
                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Cash Receipt Generating System</h4>
              </a>
              <div class="text-wrap">
                <!-- <p>
                  Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green.
                </p> -->
              </div>
              <a href="{{ url('/portfolio') }}" class="primary_btn2">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/ecomm/1.png" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#"><i class="ti-user"></i> Admin post</a>
                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Ecommerce</h4>
              </a>
              <div class="text-wrap">
                <p>
                  <!-- Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green. -->
                </p>
              </div>
              <a href="{{ url('/portfolio') }}" class="primary_btn2">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog">
            <div class="thumb">
              <img class="img-fluid" src="img/bussi/1.png" alt="">
            </div>
            <div class="short_details">
              <div class="meta-top d-flex">
                <a href="#"><i class="ti-user"></i> Admin post</a>
                <a href="#"><i class="ti-calendar"></i> Feb 14, 2019</a>
              </div>
              <a class="d-block" href="single-blog.html">
                <h4>Bussiness Website</h4>
              </a>
              <div class="text-wrap">
                <p>
                  <!-- Have whose a two night earth she set you creeping replenish place whales move Forth first him seed green. -->
                </p>
              </div>
              <a href="{{ url('/portfolio') }}" class="primary_btn2">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Blog Area =================-->

  <!--================ Start Brands Area =================-->
  <section class="brands-area section_gap_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="owl-carousel brand-carousel">
            <!-- single-brand -->
            <img src="img/logo1.png" alt="">
            
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Brands Area =================-->



@endsection