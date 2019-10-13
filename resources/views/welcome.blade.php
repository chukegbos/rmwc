@extends('layouts.live')
@section('pageTitle', 'Home')
@section('content')
  <section id="home" class="fullscreen-banner banner p-0" style="margin-top: -20px; height: 320px">
    <div class="align-center pt-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 img-side text-center ">
            <img class="hidden-md-down img-center" src="{{ asset('images/banner/05.png') }}" alt="">
            <!--<div class="video-box">
              <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><i class="la la-play"></i></a>
                <div class="spinner-eff">
                  <div class="spinner-circle circle-1"></div>
                  <div class="spinner-circle circle-2"></div>
                </div>
              </div>
            </div>-->
          </div>
          <div class="col-lg-6 col-md-12 ml-auto md-mt-5 md-mb-7" style="text-align: center; text-transform: uppercase;">
            <h1 class="mb-4 font-weight-normal wow fadeInUp" data-wow-duration="1.5s">Reading Marathon With <span class="font-weight-bold text-uppercase">Chiman</span></h1>
            <!--<p class="lead mb-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">Softino is an all-new stylish Software For device that can show you things. awareness, drive traffic, connect with customers.</p>-->
            @guest
              <a class="btn btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="{{ route('register') }}" data-text="Get Started"> 
                <span>L</span>
                <span>o</span>
                <span>g</span>
                <span>i</span>
                <span>n</span>
              </a>
              <a class="btn btn-dark wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="{{ route('login') }}" data-text="Have an account?" style="width: 200px;"> 
                <span>S</span>
                <span>i</span>
                <span>g</span>
                <span>n</span>
                <span> </span>
                <span>u</span>
                <span>p</span>
              </a>
            @else
              <a class="btn btn-theme wow fadeInUp" data-wow-duration="3s" data-wow-delay="0.5s" href="{{ route('home') }}" data-text="Go to dashboard"> 
                <span>W</span>
                <span>e</span>
                <span>l</span>
                <span>c</span>
                <span>o</span>
                <span>m</span>
                <span>e</span>
              </a>
            @endguest
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--
    <div class="page-content">
      <section id="about" class="p-0 pos-r">
        <div class="container">
          <div class="row custom-mt-15">
            <div class="col-lg-12 col-md-12 ml-auto mr-auto">
              <div class="owl-carousel owl-theme" data-items="1" data-autoplay="true">
                <div class="item mx-3 my-3">
                  <div class="img-box box-shadow">
                    <div class="box-loader"> <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <img class="img-center" src="{{ asset('images/banner/03.jpg') }}" alt="">
                  </div>
                </div>
                <div class="item mx-3 my-3">
                  <div class="img-box box-shadow">
                    <div class="box-loader"> <span></span>
                      <span></span>
                      <span></span>
                    </div>
                    <img class="img-center" src="{{ asset('images/banner/04.jpg') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pos-r">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
              <img class="img-fluid w-100" src="{{ asset('images/svg/03.svg') }}" alt="">
            </div>
            <div class="col-lg-6 col-md-12 md-mt-5">
              <div class="section-title mb-3">
                <div class="title-effect title-effect-2">
                  <div class="ellipse"></div> <i class="la la-info"></i>
                </div>
                <h2>We're Building Modern And High Software</h2>
              </div>
              <p class="lead mb-5">Deos et accusamus et iusto odio dignissimos qui blanditiis praesentium voluptatum dele corrupti quos dolores et quas molestias a orci facilisis rutrum.</p>
              <div class="owl-carousel owl-theme no-pb" data-dots="false" data-items="2" data-margin="30" data-autoplay="true">
                <div class="item">
                  <div class="counter style-3">
                    <div class="counter-icon">
                      <img class="img-center" src="{{ asset('images/counter/01.png') }}" alt="">
                    </div>
                    <div class="counter-desc">
                     <span class="count-number" data-to="2304" data-speed="10000">2304</span>
                    <h5>Project Done</h5>
                  </div>
                  </div>
                </div>
                <div class="item">
                  <div class="counter style-3">
                    <div class="counter-icon">
                      <img class="img-center" src="{{ asset('images/counter/02.png') }}" alt="">
                    </div>
                    <div class="counter-desc">
                      <span class="count-number" data-to="3585" data-speed="10000">3585</span>
                    <h5>Success Rate</h5>
                  </div>
                  </div>
                </div>
                <div class="item">
                  <div class="counter style-3">
                    <div class="counter-icon">
                      <img class="img-center" src="{{ asset('images/counter/03.png') }}" alt="">
                    </div>
                    <div class="counter-desc">
                     <span class="count-number" data-to="1365" data-speed="10000">1365</span>
                    <h5>Awards</h5>
                  </div>
                </div>
                </div>
                <div class="item">
                  <div class="counter style-3">
                    <div class="counter-icon">
                      <img class="img-center" src="{{ asset('images/counter/04.png') }}" alt="">
                    </div>
                    <div class="counter-desc">
                     <span class="count-number" data-to="4328" data-speed="10000">4328</span>
                    <h5>Happy Client</h5>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="service" class="pos-r bg-effect-2 bg-effect-3 py-15" data-bg-color="#fbfbfb">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
              <div class="section-title">
                <div class="title-effect title-effect-2">
                  <div class="ellipse"></div> <i class="la la-cubes"></i>
                </div>
                <h2 class="title">Our Exciting feature And Service</h2>
                <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-software"></i>
                </div>
                <div class="featured-title">
                  <h5>Design</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 sm-mt-5">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-scroll"></i>
                </div>
                <div class="featured-title">
                  <h5>Drag And Drop</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 md-mt-5">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-resolution"></i>
                </div>
                <div class="featured-title">
                  <h5>High Resolution</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-objective"></i>
                </div>
                <div class="featured-title">
                  <h5>App integration</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-market"></i>
                </div>
                <div class="featured-title">
                  <h5>Marketing</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-5">
              <div class="featured-item style-6">
                <div class="featured-icon"> <i class="flaticon-customer-service"></i>
                </div>
                <div class="featured-title">
                  <h5>Helping Support</h5>
                </div>
                <div class="featured-desc">
                  <p>Top quality Software services, labore et dolore magna ali qua Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="pos-r o-hidden">
        <div class="bg-animation">
          <img class="zoom-fade" src="{{ asset('images/pattern/03.png') }}" alt="">
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="tab style-2">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-tab1" data-toggle="tab" href="#tab1-1" role="tab" aria-selected="true"> <i class="flaticon-data"></i> 
                      <h5>Marketing</h5>
                    </a> <a class="nav-item nav-link" id="nav-tab2" data-toggle="tab" href="#tab1-2" role="tab" aria-selected="false"><i class="flaticon-research"></i> <h5>Planning</h5></a>
                    <a class="nav-item nav-link" id="nav-tab3" data-toggle="tab" href="#tab1-3" role="tab" aria-selected="false"><i class="flaticon-analytics"></i> <h5>Anlysis</h5></a>
                    <a class="nav-item nav-link" id="nav-tab4" data-toggle="tab" href="#tab1-4" role="tab" aria-selected="false"><i class="flaticon-objective"></i> <h5>Stratergy</h5></a>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div role="tabpanel" class="tab-pane fade show active" id="tab1-1">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="{{ asset('images/svg/04.svg') }}" alt="">
                      </div>
                      <div class="col-lg-6 col-md-12 md-mt-5">
                        <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                        <p class="mb-4">Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="custom-li list-unstyled list-icon-2 d-inline-block">
                          <li>Design must be functional</li>
                          <li>Futionality must into</li>
                          <li>Aenean pellentes vitae</li>
                          <li>Mattis effic iturut magna</li>
                          <li>Lusce enim nulla mollis</li>
                          <li>Phasellus eget felis</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab1-2">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="{{ asset('images/svg/05.svg') }}" alt="">
                      </div>
                      <div class="col-lg-6 col-md-12 md-mt-5">
                        <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                        <p class="mb-4">Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="custom-li list-unstyled list-icon-2 d-inline-block">
                          <li>Design must be functional</li>
                          <li>Futionality must into</li>
                          <li>Aenean pellentes vitae</li>
                          <li>Mattis effic iturut magna</li>
                          <li>Lusce enim nulla mollis</li>
                          <li>Phasellus eget felis</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab1-3">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="{{ asset('images/svg/06.svg') }}" alt="">
                      </div>
                      <div class="col-lg-6 col-md-12 md-mt-5">
                        <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                        <p class="mb-4">Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="custom-li list-unstyled list-icon-2 d-inline-block">
                          <li>Design must be functional</li>
                          <li>Futionality must into</li>
                          <li>Aenean pellentes vitae</li>
                          <li>Mattis effic iturut magna</li>
                          <li>Lusce enim nulla mollis</li>
                          <li>Phasellus eget felis</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="tab1-4">
                    <div class="row align-items-center">
                      <div class="col-lg-6 col-md-12">
                        <img class="img-fluid" src="{{ asset('images/svg/07.svg') }}" alt="">
                      </div>
                      <div class="col-lg-6 col-md-12 md-mt-5">
                        <h4 class="mb-4">Powerful & Awesome Marketing</h4>
                        <p class="mb-4">Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul class="custom-li list-unstyled list-icon-2 d-inline-block">
                          <li>Design must be functional</li>
                          <li>Futionality must into</li>
                          <li>Aenean pellentes vitae</li>
                          <li>Mattis effic iturut magna</li>
                          <li>Lusce enim nulla mollis</li>
                          <li>Phasellus eget felis</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="team" class="pos-r o-hidden">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
              <div class="section-title">
                <div class="title-effect title-effect-2">
                  <div class="ellipse"></div> <i class="la la-users"></i>
                </div>
                <h2 class="title">Meet Our Expert team member will ready for your service</h2> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="team-member style-4">
                <div class="team-images">
                  <img class="img-fluid radius box-shadow" src="{{ asset('images/team/01.jpg') }}" alt=""> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                </div>
                <div class="team-description"> <span>Manager</span>
                  <h5>Jemy Lusto</h5> 
                  <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
                  <div class="social-icons social-colored team-social-icon">
                    <ul>
                      <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                      </li>
                      <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 md-mt-5">
              <div class="team-member style-4">
                <div class="team-images">
                  <img class="img-fluid radius box-shadow" src="{{ asset('images/team/02.jpg') }}" alt=""> <a class="team-link" href="team-single.html"><i class="la la-external-link"></i></a>
                </div>
                <div class="team-description"> <span>Manager</span>
                  <h5>Tom Roadse</h5> 
                  <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
                  <div class="social-icons social-colored team-social-icon">
                    <ul>
                      <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                      </li>
                      <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="pricing" class="bg-effect-4 pos-r o-hidden">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <div class="section-title">
                <div class="title-effect title-effect-2">
                  <div class="ellipse"></div> <i class="la la-money"></i>
                </div>
                <h2 class="title">Choose affordable prices</h2>
                <p class="text-black">Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
              </div>
              <ul class="list-unstyled list-icon mb-4">
                <li class="mb-3"><i class="la la-check"></i> Deos et accusamus et iusto odio</li>
                <li class="mb-3"><i class="la la-check"></i> Sistinctively brand innovation</li>
                <li class="mb-3"><i class="la la-check"></i> Quis nostrud exercitation</li>
                <li class="mb-3"><i class="la la-check"></i> Laboris nisi ut aliquip ex</li>
                <li><i class="la la-check"></i> Molestias a orci facilisis rutrum</li>
              </ul>
            </div>
            <div class="col-lg-8 col-md-12">
              <div class="owl-carousel owl-theme no-pb" data-dots="false" data-items="2" data-sm-items="1" data-autoplay="true">
                <div class="item">
                  <div class="price-table style-3 mx-3 my-3">
                    <div class="price-inside">Starter</div>
                    <div class="price-header">
                      <div class="price-value">
                        <h2><span>$</span>33</h2>
                        <span>Monthly Package</span>
                      </div>
                      <h3 class="price-title">Starter</h3> 
                    </div>
                    <div class="price-list">
                      <ul class="list-unstyled">
                        <li>15 Analytics Compaign</li>
                        <li>Unlimited Site licenses</li>
                        <li>1 Database</li>
                        <li>10 Free Optimization</li>
                        <li>Html5 + Css3</li>
                        <li>24/7 Customer Support</li>
                      </ul>
                    </div>
                    <a class="btn btn-theme btn-circle mt-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                      <span> </span><span>N</span><span>o</span><span>w</span>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="price-table style-3 mx-3 my-3">
                    <div class="price-inside">Premium</div>
                    <div class="price-header">
                      <div class="price-value">
                        <h2><span>$</span>55</h2>
                        <span>Monthly Package</span>
                      </div>
                      <h3 class="price-title">Premium</h3> 
                    </div>
                    <div class="price-list">
                      <ul class="list-unstyled">
                        <li>15 Analytics Compaign</li>
                        <li>Unlimited Site licenses</li>
                        <li>1 Database</li>
                        <li>10 Free Optimization</li>
                        <li>Html5 + Css3</li>
                        <li>24/7 Customer Support</li>
                      </ul>
                    </div>
                    <a class="btn btn-theme btn-circle mt-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                      <span> </span><span>N</span><span>o</span><span>w</span>
                    </a>
                  </div>
                </div>
                <div class="item">
                  <div class="price-table style-3 mx-3 my-3">
                    <div class="price-inside">Professional</div>
                    <div class="price-header">
                      <div class="price-value">
                        <h2><span>$</span>99</h2>
                        <span>Monthly Package</span>
                      </div>
                      <h3 class="price-title">Professional</h3> 
                    </div>
                    <div class="price-list">
                      <ul class="list-unstyled">
                        <li>15 Analytics Compaign</li>
                        <li>Unlimited Site licenses</li>
                        <li>1 Database</li>
                        <li>10 Free Optimization</li>
                        <li>Html5 + Css3</li>
                        <li>24/7 Customer Support</li>
                      </ul>
                    </div>
                    <a class="btn btn-theme btn-circle mt-4" href="#" data-text="Purchase Now"> <span>P</span><span>u</span><span>r</span><span>c</span><span>h</span><span>a</span><span>s</span><span>e</span>
                      <span> </span><span>N</span><span>o</span><span>w</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pos-r o-hidden bg-effect right" data-bg-img="{{ asset('images/pattern/01.png') }}">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="testimonial-carousel carousel slide testimonial-2" data-ride="carousel" data-interval="2500">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="testimonial style-5">
                      <div class="testimonial-img">
                        <img class="img-center" src="{{ asset('images/testimonial/01.jpg') }}" alt="">
                      </div>
                      <div class="testimonial-content">
                        <div class="testimonial-quote"><i class="la la-quote-left"></i>
                        </div>
                        <p>Professional recommended and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit</p>
                        <div class="testimonial-caption">
                          <h5>Lana Roadse</h5>
                          <label>CEO of Softino</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial style-5">
                      <div class="testimonial-img">
                        <img class="img-center" src="{{ asset('images/testimonial/02.jpg') }}" alt="">
                      </div>
                      <div class="testimonial-content">
                        <div class="testimonial-quote"><i class="la la-quote-left"></i>
                        </div>
                        <p>Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, Consectetur adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>
                        <div class="testimonial-caption">
                          <h5>Lana Roadse</h5>
                          <label>CEO of Softino</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial style-5">
                      <div class="testimonial-img">
                        <img class="img-center" src="{{ asset('images/testimonial/03.jpg') }}" alt="">
                      </div>
                      <div class="testimonial-content">
                        <div class="testimonial-quote"><i class="la la-quote-left"></i>
                        </div>
                        <p>Consectetur Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>
                        <div class="testimonial-caption">
                          <h5>Lana Roadse</h5>
                          <label>CEO of Softino</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="testimonial style-5">
                      <div class="testimonial-img">
                        <img class="img-center" src="{{ asset('images/testimonial/04.jpg') }}" alt="">
                      </div>
                      <div class="testimonial-content">
                        <div class="testimonial-quote"><i class="la la-quote-left"></i>
                        </div>
                        <p>Consectetur Recommended Professional and great experience, Nam pulvinar vitae neque et porttitor, Praesent sed nisi eleifend, adipisicing elit, sed do eiusmodas temporo incididunt Praesent sed nisi eleifend, Consectetur adipisicing elit,</p>
                        <div class="testimonial-caption">
                          <h5>Lana Roadse</h5>
                          <label>CEO of Softino</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="blog">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-8 col-md-12 ml-auto mr-auto">
              <div class="section-title">
                <div class="title-effect title-effect-2">
                  <div class="ellipse"></div> <i class="la la-btc"></i>
                </div>
                <h2 class="title">Creative Blogs</h2>
                <p>Softino Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme" data-items="3" data-md-items="2" data-sm-items="1" data-autoplay="true">
                <div class="item">
                  <div class="post style-3">
                    <div class="post-image">
                      <img class="img-fluid h-100 w-100" src="{{ asset('images/blog/01.jpg') }}" alt=""> <a class="post-categories" href="#">Photo</a>
                    </div>
                    <div class="post-desc">
                      <div class="post-title">
                        <h4><a href="blog-single.html">Softino Performance Based Software</a></h4>
                      </div>
                      <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li><i class="la la-calendar mr-1"></i> 23 Jan, 2019</li>
                          <li><i class="la la-user mr-1"></i> By ThemeHt</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="post style-3">
                    <div class="post-image">
                      <img class="img-fluid h-100 w-100" src="{{ asset('images/blog/02.jpg') }}" alt=""> <a class="post-categories" href="#">Photo</a>
                    </div>
                    <div class="post-desc">
                      <div class="post-title">
                        <h4><a href="blog-single.html">latest Software design in features</a></h4>
                      </div>
                      <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li><i class="la la-calendar mr-1"></i> 23 Jan, 2019</li>
                          <li><i class="la la-user mr-1"></i> By ThemeHt</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="post style-3">
                    <div class="post-image">
                      <img class="img-fluid h-100 w-100" src="{{ asset('images/blog/03.jpg') }}" alt=""> <a class="post-categories" href="#">Photo</a>
                    </div>
                    <div class="post-desc">
                      <div class="post-title">
                        <h4><a href="blog-single.html">All Powerful Design feature In Softino</a></h4>
                      </div>
                      <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li><i class="far fa-calendar-alt mr-1"></i> 23 Jan, 2019</li>
                          <li><i class="fas fa-user-circle mr-1"></i> By ThemeHt</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="post style-3">
                    <div class="post-image">
                      <img class="img-fluid h-100 w-100" src="{{ asset('images/blog/02.jpg') }}" alt=""> <a class="post-categories" href="#">Photo</a>
                    </div>
                    <div class="post-desc">
                      <div class="post-title">
                        <h4><a href="blog-single.html">Uniquely Performance Based Software</a></h4>
                      </div>
                      <p>Consequat dolor sit amet, consectetur adipiscing elit. Maecenas lobortis quam id lectus aliquet euismod. Ut sagittis…</p>
                      <div class="post-meta">
                        <ul class="list-inline">
                          <li><i class="la la-calendar mr-1"></i> 23 Jan, 2019</li>
                          <li><i class="la la-user mr-1"></i> By ThemeHt</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  -->
@endsection