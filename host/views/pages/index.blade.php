@extends('layouts.app')
@section('content')

  <!--Carousel Wrapper-->
  <div class="hero-slide owl-carousel site-blocks-cover">
      <div class="intro-section" style="background-image: url('images/3.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              <h2>Welcome to NUESA</h2>

              <h2 class="text-white">Nigerian Universities Engineering Students' Association</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="intro-section" style="background-image: url('images/5.jpg');">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
              
              <h2>Welcome to NUESA</h2>
              <h2 class="text-white">Nigerian Universities Engineering Students' Association</h2>
              
            </div>
          </div>
        </div>
      </div>

    </div>
  
    <div></div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-5 ">
              <span class="text-uppercase">NUESA National Body</span>
            </h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-mortarboard text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>ABOUT NUESA</h2>
                <p>Nigerian Universities Engineering Students’ Association (NUESA) National Body is the students wing of Nigerian Society of Engineers (NSE). </p>
                <p><a href="about" class="btn btn-success text-white px-4 rounded-0">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-school-material text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>MISSION AND CORE VALUES </h2>
                <p>To create a platform where Engineering students can learn from practicing Engineers from diverse fields of Engineering. </p>
                <p><a href="mission" class="btn btn-success text-white px-4 rounded-0">Learn More</a></p>
              </div>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="feature-1 border">
              <div class="icon-wrapper bg-primary">
                <span class="flaticon-library text-white"></span>
              </div>
              <div class="feature-1-content">
                <h2>AIM</h2>
                <p>To encourage socialization, learning and exposure amongst engineering students in Nigeria.</p>
                {{-- <p><a href="#" class="btn btn-success text-white px-4 rounded-0">Learn More</a></p> --}}
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>

<!-- 
    <div class="site-section">
      <div class="container">


        <div class="row mb-5 justify-content-center text-center">
          <div class="col-lg-6 mb-5">
            <h2 class="section-title-underline mb-3">
              <span>Popular Courses</span>
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, id?</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
              <div class="owl-slide-3 owl-carousel">
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/course_1.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Mobile Application</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/course_2.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Web Design</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                      <a href="course-single.html"><img src="images/course_3.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Arithmetic</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="courses-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>

                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="images/course_4.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Mobile Application</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="images/course_5.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Web Design</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
                  <div class="course-1-item">
                    <figure class="thumnail">
                        <a href="course-single.html"><img src="images/course_6.jpg" alt="" class="img-fluid"></a>
                      <div class="price">$99.00</div>
                      <div class="category"><h3>Mobile Application</h3></div>  
                    </figure>
                    <div class="course-1-content pb-4">
                      <h2>How To Create Mobile Apps Using Ionic</h2>
                      <div class="rating text-center mb-3">
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                        <span class="icon-star2 text-warning"></span>
                      </div>
                      <p class="desc mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique accusantium ipsam.</p>
                      <p><a href="course-single.html" class="btn btn-primary rounded-0 px-4">Enroll In This Course</a></p>
                    </div>
                  </div>
      
              </div>
      
          </div>
        </div>

        
        
      </div>
    </div>

     -->


    <div class="section-bg style-1" style="background-image: url('images/logon.png');">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="section-title-underline style-2">
              <span>About The Association</span>
            </h2>
          </div>
          <div class="col-lg-8">
            <p class="lead">Nigerian Universities Engineering Students’ Association (NUESA) National Body is the students wing of Nigerian Society of Engineers (NSE). This is the National, Active, Progressive and Democratic Association formed for the sole purpose of promoting the welfare and interest of her members. </p>
            <p>NUESA is aim at creating a platform where engineering students can learn from practicing Engineers from diverse fields of Engineering.  So as to help in shaping the course of technological development of Nigeria by encouraging and carrying out industrial projects, offering useful and constructive suggestions to the government and the bodies responsible for the making of the nation's technological policies. </p>
            <p><a href="about">Read more</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- // 05 - Block -->
  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 class="section-title-underline" id="Present">
              <span>2020 National Executive</span>
            </h2>
          </div>
        </div>


        <div class="owl-slide owl-carousel text-uppercase" style="word-wrap: break-word;">

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/6.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3 class="text-uppercase">Dauda monsuru olatunji</h3>
                <span class="text-uppercase">President</span>
              </div>
            </div>
            <div class="text-uppercase">
              <p>LADOKE AKINTOLA UNIVERSITY OF TECHNOLOGY,</p>
                <p>OYO STATE.</p>
                <p>+234 (0)816 327 9885</p>
                <p>NOMAGICINSUCCESS2410@GMAIL.COM</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/vpzonea.jpg" alt="" class="img-fluid mr-3">
              <div class="text-uppercase">
                <h3>SIRAJO ADAMU</h3>
                <span>VICE PRESIDENT/ ZONE A COORDINATOR</span>
              </div>
            </div>
            <div class="text-uppercase">
              <p>
KANO UNIVERSITY OF SCIENCE AND TECHNOLOGY WUDIL,<br>
KANO STATE<br>
+234 (0)7068452586<br>
SIRAJIBNADAM@GMAIL.COM</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/vpzoneb.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>AKHIMIEN JUDE FRIDAY</h3>
                <span>VICE PRESIDENT/ ZONE B COORDINATOR</span>
              </div>
            </div>
            <div>
              <p>

AMBROSE ALLI UNIVERSITY, EKPOMA,<br> EDO STATE.<br>
07057821944<br>
AKHIMIENFRIDAY.1228@YAHOO.COM</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/vpzonec.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>AL-MUSTAPHA SULE</h3>
                <span>V.P/ZONE C COORDINATOR</span>
              </div>
            </div>
            <div>
              <p>

UNIVERSITY OF MAIDUGURI<br>
BORNO STATE,<br>
+234 (0)7036352800<br>
MUSTAPHASULE55@YAHOO.COM</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/vpzoned.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>ADEOLA ADEFOLAHAN</h3>
                <span>VICE PRESIDENT/ZONE D COORDINATOR</span>
              </div>
            </div>
            <div>
              <p>

FEDERAL UNIVERSITY OF TECHNOLOGY AKURE,<br> ONDO STATE<br>
08184668844<br>
SIRPHOLA2019@GMAIL.COM</p>
            </div>
          </div>

          <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/vpzonee.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>OKEJIAKU TOBECHUKWU</h3>
                <span>VP/ZONE E COORDINATOR</span>
              </div>
            </div>
            <div>
              <p>

FEDERAL UNIVERSITY OF TECHNOLOGY OWERRI<br>
08067406164<br>
OKEJIAKUTOBECHUKWU@GMAIL.COM</p>
            </div>
          </div>

      <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/secgen.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>EZE CHUKWUEMEKA EMMANUEL</h3>
                <span>SECRETARY GENERAL</span>
              </div>
            </div>
            <div>
              <p>


ALEX EKWUEME FEDERAL UNIVERSITY NDUFU ALIKE,<br>
EBONYI STATE<br>
+234(0)8066974723<br>
MICKYMEKUS@GMAIL.COM</p>
            </div>
          </div>
                <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/finesec.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>EDOHO ESTHER</h3>
                <span>
FINANCIAL SECRETARY</span>
              </div>
            </div>
            <div>
              <p>

UNIVERSITY OF PORT HARCOURT,<br> RIVERS STATE.<br>
08133388311<br>
STAREXEDOHO@GMAIL.COM</p>
            </div>
          </div>
                <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="" alt="" class="img-fluid mr-3">
              <div>
                <h3>MUSTAPHA KUDUS O.</h3>
                <span>ASSISTANT SECRETARY GENERAL</span>
              </div>
            </div>
            <div>
              <p>


FEDERAL UNIVERSITY OF TECHNOLOGY MINNA,<br> NIGER STATE.<br>
+234(0)9050204906<br>
MUSTAPHAKUDUS9@GMAIL.COM</p>
            </div>
          </div>
                <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/treasurer.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>MUSTAPHA YUSUF.</h3>
                <span>TREASURE.</span>
              </div>
            </div>
            <div>
              <p>


TARABA STATE UNIVERSITY JALINGO.<br> TARABA STATE.<br>
+2348062960302.<br>
YUSUFMUSTY4REAL@GMAIL.COM</p>
            </div>
          </div>

              <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="images/pro.jpg" alt="" class="img-fluid mr-3">
              <div>
                <h3>OGOLO-CHRISTIAN DIMABO DESTINY</h3>
                <span>P.R.O</span>
              </div>
            </div>
            <div>
              <p>



RIVERS STATE UNIVERSITY,<br> RIVERS STATE.<br>
+2348055364349<br>
OGOLO.DESTINY4@GMAIL.COM</p>
            </div>
          </div>
              <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="" alt="" class="img-fluid mr-3">
              <div>
                <h3>MORDI CHUKWUBUOKEM OGOCHUKWU</h3>
                <span>DIRECTOR OF SPORT</span>
              </div>
            </div>
            <div>
              <p>
FEDERAL UNIVERSITY OF PETROLEUM RESOURCES</p>
            </div>
          </div>
              <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
              <img src="" alt="" class="img-fluid mr-3">
              <div>
                <h3>OKAFOR CHUKWUDI AMOS</h3>
                <span>DIRECTOR OF SOCIAL</span>
              </div>
            </div>
            <div>
              <p>



ALEX EKWUEME FEDERAL UNIVERSITY NDUFU ALIKE IKWO, <br>EBOYNI STATE<br>
09033855872<br>
MINICEEKAY@GMAIL.COM</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    

    <div class="section-bg style-1" style="background-image: url('pic/dauda.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-6 mb-5 mb-lg-0">
            <!-- <span class="icon flaticon-mortarboard"></span> -->
           <img src="images/6.jpg" style="height: 500px;width: 400px;border-radius: 20%" >
          </div>
      
          <div class="col-lg-7 col-md-6 mb-5 mb-lg-0">
            <!-- <span class="icon flaticon-library"></span> -->
            <h3>Brief citation of DAUDA, Monsuru Olatunji, 2020 NUESA president</h3>
            <p>Born  to the family of Mr and Mrs DAUDA of Mogunala compound, Idiabede, Iwo, Osun State. NMIS as popularly known is a first class male student of department of Chemical Engineering, Ladoke Akintola University of Technology (LAUTECH) Ogbomoso. Oyo state.
Dauda Monsuru olatunji has been taking one leadership role after another since his childhood years. He was made the Labour Prefect (2008) in his primary school (Vico Hope Nursery and Primary School, Iwo,  Osun state)  a role that placed the responsibility of overseeing the school’s maintenance and good use of the school’s properties. He was also the senior prefect (2014) during his final year at high school ( A1 Comprehensive Grammar School, Iwo,  Osun state) . There, he had to represent the student’s interests and be a medium between staff and students in the school.</p>
<p>He once held the post of the Public Relation Officer of Nigerian Universities Engineering Students’ Association(NUESA) LAUTECH branch. Secretary of American Chemical Society (ACS), LAUTECH chapter. Amongst others.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="news-updates">
      <div class="container">
         
        <div class="row" >
          <div class="col-lg-12">
             <div class="section-heading">
              <h2 class="text-black" id="news">News &amp; Updates</h2>
              <a >Read All News</a>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="post-entry-big">
                  <a  class="img-link"><img src="images/new1.jpg" alt="" class="img-fluid"></a>
                  <!-- <div class="post-content">
                    <div class="post-meta"> 
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div>
                </div> -->
              </div>
            </div>
              <div class="col-lg-4">
                <div class="post-entry-big ">
                  <a  class="img-link mr-4"><img src="images/new2.jpg" alt="" class="img-fluid"></a>
                  <!-- <div class="post-content">
                    <div class="post-meta">
                      <a href="#">June 6, 2019</a>
                      <span class="mx-1">/</span>
                      <a href="#">Admission</a>, <a href="#">Updates</a>
                    </div>
                    <h3 class="post-heading"><a href="news-single.html">Campus Camping and Learning Session</a></h3>
                  </div> -->
                </div>

               
              <!-- </div> -->
            </div>
          </div>
        <!--   <div class="col-lg-3">
            <div class="section-heading">
              <h2 class="text-black">Campus Videos</h2>
              <a href="#">View All Videos</a>
            </div>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
              <span class="play">
                <span class="icon-play"></span>
              </span>
              <img src="images/course_5.jpg" alt="" class="img-fluid">
            </a>
            <a href="https://vimeo.com/45830194" class="video-1 mb-4" data-fancybox="" data-ratio="2">
                <span class="play">
                  <span class="icon-play"></span>
                </span>
                <img src="images/course_5.jpg" alt="" class="img-fluid">
              </a>
          </div> -->
        </div>
      </div>
    </div>

       {{-- @include('includes.footer') --}}
@endsection