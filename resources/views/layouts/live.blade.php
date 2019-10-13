<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('pageTitle') - Reading Marathon With Chiman</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

    <!-- inject css start -->

    <!--== bootstrap -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!--== animate -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />

    <!--== fontawesome -->
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <!--== line-awesome -->
    <link href="{{ asset('css/line-awesome.min.css') }}" rel="stylesheet" type="text/css" />

    <!--== magnific-popup -->
    <link href="{{ asset('css/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <!--== owl-carousel -->
    <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="{{ asset('css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <!--== default-theme -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />

    <!--== responsive -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
  </head>

  <body class="home-5">
    <div class="page-wrapper">
      <div id="ht-preloader">
        <div class="loader clear-loader">
          <div class="loader-box"></div>
          <div class="loader-box"></div>
          <div class="loader-box"></div>
          <div class="loader-box"></div>
          <div class="loader-wrap-text">
            <div class="text"><span>S</span><span>O</span><span>F</span><span>T</span><span>I</span><span>N</span><span>O</span>
            </div>
          </div>
        </div>
      </div>


      <header id="site-header" class="header">
        <div class="container">
          <div id="header-wrap">
            <div class="row">
              <div class="col-lg-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand logo" href="index.html">
                    <img id="logo-img" class="img-center" src="{{ asset('classily/images/logo.jpg') }}" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                    <span></span>
                    <span></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    @guest
                      <!--<ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">
                        <li class="nav-item"> <a class="nav-link active" href="#home">Home</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#about">About</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#service">Services</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#team">Team</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#pricing">Pricing</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#blog">Blog</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Pages</a>
                          <ul>
                           <li><a href="#">About Us</a>
                              <ul>
                                <li><a href="about-us.html">About Us 1</a>
                                </li>
                                <li><a href="about-us-2.html">About Us 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="#">Services</a>
                              <ul>
                                <li><a href="services.html">Service 1</a>
                                </li>
                                <li><a href="services-2.html">Service 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="team.html">Team</a>
                            </li>
                            <li><a href="team-single.html">Team Single</a>
                            </li>
                            <li><a href="faq.html">Faq</a>
                            </li>
                            <li><a href="#">Blogs</a>
                              <ul>
                                <li><a href="blog-grid-2.html">Blog Grid 2</a>
                                </li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                </li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                </li>
                                <li><a href="blog-single.html">Blog Single</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="#">Element</a>
                              <ul>
                                <li><a href="shortcode-accordions.html">Accordion</a>
                                </li>
                                <li><a href="shortcode-blog-post.html">Blog Post</a>
                                </li>
                                <li><a href="shortcode-counter.html">Counter</a>
                                </li>
                                <li><a href="shortcode-feature-box.html">Featured Box</a>
                                </li>
                                <li><a href="shortcode-pricing.html">Pricing Table</a>
                                </li>
                                <li><a href="shortcode-team.html">Team</a>
                                </li>
                                <li><a href="shortcode-testimonial.html">Testimonials</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="#">Contact us</a>
                              <ul>
                                <li><a href="contact.html">Contact 1</a>
                                </li>
                                <li><a href="contact-2.html">Contact 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a href="coming-soon.html">Coming Soon</a>
                            </li>
                            <li><a href="error-404.html">Error 404</a>
                            </li>
                          </ul>
                        </li>
                      </ul>-->
                    @else
                      <ul id="main-menu" class="nav navbar-nav ml-auto mr-auto">
                        <li class="nav-item"> <a class="nav-link" href="#home"><i class="fa fa-calendar"></i> Yearly Calendar</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#about"><i class="fa fa-crown"></i> Milestone</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#service"><i class="fa fa-book"></i> Study Habits</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#team"><i class="fa fa-bell"></i> Goal Setting</a> 
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="#pricing"><i class="fa fa-car"></i> Speed Reading</a> 
                        </li>
                      </ul>
                    @endguest
                  </div>
                  @guest
                    <a class="btn btn-white btn-sm" href="{{ route('login') }}" data-text="Login"> 
                      <span>L</span><span>o</span><span>g</span><span>i</span><span>n</span>
                    </a>
                  @else
                    <a class="btn btn-white btn-sm" href="{{ route('home') }}" data-text="Logout"> 
                      <span>L</span>
                      <span>o</span>
                      <span>g</span>
                      <span>o</span>
                      <span>u</span>
                      <span>t</span>
                    </a>
                  @endguest
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
      <!--<footer class="footer dark-bg pos-r animatedBackground" data-bg-img="{{ asset('images/pattern/03.png') }}">  
        <div class="footer-wave" data-bg-img="{{ asset('images/bg/08.png') }}">
        </div> 
        <div class="primary-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="footer-logo">
                  <img id="footer-logo-white-img" src="{{ asset('images/logo-customizer-white/logo-color-5.png') }}" class="img-center" alt="">
                </div>
                <p class="mb-0">Softino Software Landing Page Is fully responsible, Build whatever you like with the Softino, Softino is the creative, modern HTML5 Template suitable for Your business.</p>
              </div>
              <div class="col-lg-4 col-md-6 pl-md-5 sm-mt-5 footer-list justify-content-between d-flex">
                <ul class="list-unstyled w-100">
                  <li><a href="about-us.html">About Us</a>
                  </li>
                  <li><a href="services.html">Service</a>
                  </li>
                  <li><a href="team.html">Team</a>
                  </li>
                  <li><a href="team-single.html">Team Single</a>
                  </li>
                  <li><a href="contact.html">Contact Us</a>
                  </li>
                </ul>
                <ul class="list-unstyled w-100">
                  <li><a href="blog-right-sidebar.html">Blog</a>
                  </li>            
                  <li><a href="faq.html">Faq</a>
                  </li>
                  <li><a href="error-404.html">Error 404</a>
                  </li>
                  <li><a href="privacy-policy.html">Privacy Policy</a>
                  </li>
                  <li><a href="terms-and-conditions.html">Terms</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-12 md-mt-5">
                <ul class="media-icon list-unstyled">
                  <li>
                    <p class="mb-0">Address: <b>423B, Road Wordwide Country, USA</b>
                    </p>
                  </li>
                  <li>Email: <a href="mailto:themeht23@gmail.com"><b>themeht23@gmail.com</b></a>
                  </li>
                  <li>Phone: <a href="tel:+912345678900"><b>+91-234-567-8900</b></a>
                  </li>
                  <li>Fax: <a href="tel:+912345678900"><b>+91-234-567-8900</b></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="secondary-footer">
          <div class="container">
            <div class="copyright">
              <div class="row align-items-center">
                <div class="col-lg-6 col-md-12"> <span>Copyright 2019 Softino Theme by <u><a href="#">ThemeHt</a></u> | All Rights Reserved</span>
                </div>
                <div class="col-lg-6 col-md-12 text-lg-right md-mt-3">
                  <div class="footer-social">
                    <ul class="list-inline">
                      <li class="mr-2"><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                      </li>
                      <li class="mr-2"><a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                      </li>
                      <li><a href="#"><i class="fab fa-google-plus-g"></i> Google Plus</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>-->
    </div>

    <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-go-up-in-web"></i></a></div>
    <!--== jquery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!--== popper -->
    <script src="{{ asset('js/popper.min.js') }}"></script>

    <!--== bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!--== appear -->
    <script src="{{ asset('js/jquery.appear.js') }}"></script> 

    <!--== modernizr -->
    <script src="{{ asset('js/modernizr.js') }}"></script> 

    <!--== easing -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script> 

    <!--== menu --> 
    <script src="{{ asset('js/menu/jquery.smartmenus.js') }}"></script>

    <!--== owl-carousel -->
    <script src="{{ asset('js/owl-carousel/owl.carousel.min.js') }}"></script> 

    <!--== magnific-popup --> 
    <script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!--== counter -->
    <script src="{{ asset('js/counter/counter.js') }}"></script> 

    <!--== countdown -->
    <script src="{{ asset('js/countdown/jquery.countdown.min.js') }}"></script> 

    <!--== contact-form -->
    <script src="{{ asset('js/contact-form/contact-form.js') }}"></script>

    <!--== validate -->
    <script src="{{ asset('js/contact-form/jquery.validate.min.js') }}"></script>

    <!--== map api -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <!--== map -->
    <script src="{{ asset('js/map.js') }}"></script>

    <!--== wow -->
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!--== color-customize -->
    <script src="{{ asset('js/color-customize/color-customizer.js') }}"></script> 

    <!--== theme-script -->
    <script src="{{ asset('js/theme-script.js') }}"></script>

    <!-- inject js end -->
  </body>
</html>