@extends('layouts.app')

@section('content')
<!--================ Start Banner Area =================-->
  <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
          <div class="container">
              <div class="banner_content text-center">
                  <h2>Portfolio</h2>
                  <div class="page_link">
                      <a href="{{ url('/') }}">Home</a>
                      <a href="">Portfolio</a>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================ End Banner Area =================-->


  <!--================ Start Portfolio Area =================-->
  <section class="portfolio_area section-margin pb-0" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title">
            <p class="top_text">My Portfolio <span></span></p>
            <h2>My works</h2>
          </div>
        </div>
      </div>

    <!--  <div class="filters portfolio-filter">
        <ul>
          <li class="active" data-filter="*">all</li>
          <li data-filter=".popular">popular</li>
          <li data-filter=".latest"> latest</li>
          <li data-filter=".following">following</li>
          <li data-filter=".upcoming">upcoming</li>
        </ul>
      </div>
 -->
      <div class="filters-content">
        <div class="row portfolio-grid">
          <div class="grid-sizer col-md-3 col-lg-3"></div>
          <div class="col-lg-6 col-md-6 all following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/2.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Cash Receipt</a></h4>
                <p>Generating System</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all latest popular upcoming">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/1.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Cash Receipt</a></h4>
                <p>Generating System</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 all latest following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/ecomm/1.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Ecommerce Website</a></h4>
                <!-- <p>Art, Illustration</p> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 all latest upcoming">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/5.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Cash Receipt</a></h4>
                <p>Generating System</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all popular">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/ecomm/3.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Ecommerce Website</a></h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all popular latest following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/bussi/3.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Bussiness Website</a></h4>
                <!-- <p>Art, Illustration</p> -->
              </div>
            </div>
          </div>

<div class="col-lg-6 col-md-6 all following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/3.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Cash Receipt</a></h4>
                <p>Generating System</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all latest popular upcoming">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/4.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Cash Receipt</a></h4>
                <p>Generating System</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 all latest following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/ecomm/2.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
                <p>Art, Illustration</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 all latest upcoming">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/cash/5.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Lens Mockup Design</a></h4>
                <p>Art, Illustration</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all popular">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/ecomm/3.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html"> Ecommerce Website </a></h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 all popular latest following">
            <div class="single_portfolio">
              <img class="img-fluid w-100" src="img/bussi/4.png" alt="">
              <div class="overlay"></div>
              <div class="short_info">
                <h4><a href="portfolio-details.html">Bussiness Website</a></h4>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Portfolio Area =================-->

    
@endsection
