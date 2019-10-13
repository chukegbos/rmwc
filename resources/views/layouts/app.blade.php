<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
         <title>@yield('pageTitle') - Reading Marathon With Chiman</title>
        <link rel="icon" href="{{ asset('classily/images/fav.png') }}" type="image/png" sizes="16x16"> 
        <link rel="stylesheet" href="{{ asset('classily/css/main.min.css') }}">
        <link rel="stylesheet" href="{{ asset('classily/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('classily/css/color.css') }}">
        <link rel="stylesheet" href="{{ asset('classily/css/responsive.css') }}">
       
    </head>

    <body>
        <!--<div class="se-pre-con"></div>-->
        <div class="theme-layout">
            <div class="postoverlay"></div>
            @include('component.mobilemenu') 
            @include('component.mainmenu') 

            @yield('content') 
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="widget">
                                <div class="foot-logo">
                                    <div class="logo">
                                        <a href="index-2.html" title=""><img src="{{ asset('classily/images/logo.png') }}" alt=""></a>
                                    </div>  
                                    <p>
                                        The trio took this simple idea and built it into the world’s leading carpooling platform.
                                    </p>
                                </div>
                                <ul class="location">
                                    <li>
                                        <i class="ti-map-alt"></i>
                                        <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                                    </li>
                                    <li>
                                        <i class="ti-mobile"></i>
                                        <p>+1-56-346 345</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>follow</h4></div>
                                <ul class="list-style">
                                    <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                                    <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                                    <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                                    <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                                    <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>Navigate</h4></div>
                                <ul class="list-style">
                                    <li><a href="about.html" title="">about us</a></li>
                                    <li><a href="contact.html" title="">contact us</a></li>
                                    <li><a href="terms.html" title="">terms & Conditions</a></li>
                                    <li><a href="#" title="">RSS syndication</a></li>
                                    <li><a href="sitemap.html" title="">Sitemap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>useful links</h4></div>
                                <ul class="list-style">
                                    <li><a href="#" title="">leasing</a></li>
                                    <li><a href="#" title="">submit route</a></li>
                                    <li><a href="#" title="">how does it work?</a></li>
                                    <li><a href="#" title="">agent listings</a></li>
                                    <li><a href="#" title="">view All</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="widget">
                                <div class="widget-title"><h4>download apps</h4></div>
                                <ul class="colla-apps">
                                    <li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
                                    <li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
                                    <li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer><!-- footer -->
            <div class="bottombar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="copyright">© Winku 2018. All rights reserved.</span>
                            <i><img src="{{ asset('classily/images/credit-cards.png') }}" alt=""></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="side-panel">
            <h4 class="panel-title">General Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>use night mode</span>
                    <input type="checkbox" id="nightmode1"/> 
                    <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notifications</span>
                    <input type="checkbox" id="switch22" /> 
                    <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Notification sound</span>
                    <input type="checkbox" id="switch33" /> 
                    <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>My profile</span>
                    <input type="checkbox" id="switch44" /> 
                    <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show profile</span>
                    <input type="checkbox" id="switch55" /> 
                    <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
            <h4 class="panel-title">Account Setting</h4>
            <form method="post">
                <div class="setting-row">
                    <span>Sub users</span>
                    <input type="checkbox" id="switch66" /> 
                    <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>personal account</span>
                    <input type="checkbox" id="switch77" /> 
                    <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Business account</span>
                    <input type="checkbox" id="switch88" /> 
                    <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Show me online</span>
                    <input type="checkbox" id="switch99" /> 
                    <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Delete history</span>
                    <input type="checkbox" id="switch101" /> 
                    <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
                </div>
                <div class="setting-row">
                    <span>Expose author name</span>
                    <input type="checkbox" id="switch111" /> 
                    <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
                </div>
            </form>
        </div><!-- side panel -->       
               
        <script src="{{ asset('classily/js/main.min.js') }}"></script>
        <script src="{{ asset('classily/js/script.js') }}"></script>
        <div id="createclass" class="modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">   
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Class</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="POST" action="{{ url('/create_class') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Class Name</label>
                                <input name="name" type="text" class="form-control" id="name" required>
                                <input name="owner_id" type="hidden" value="{{ Auth::user()->id }}">
                            </div>

                            <div class="form-group">
                                <label>Description of Class</label>
                                <textarea  class="form-control" name="description" id="description" placeholder="This class is for history students of ...">
                                    
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label>Select Field</label>
                                <select class="form-control" name="class_field" required="">    
                                    <option value="Computer Technology">Computer Technology</option>
                                    <option value="Law">Law</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Creative Art">Creative Art</option>
                                    <option value="Languages">Language</option>
                                    <option value="Professional Development">Professional Development</option>
                                 </select>
                            </div>

                            <div class="form-group">
                                <label>Class Type</label>
                                <select class="form-control" name="class_type" required="" id="mySelect" onchange="myFunction()">    
                                    <option value="Public">Public Class</option>
                                    <option value="Private">Private Class</option>
                                </select>
                            </div>

                            <script>
                                function myFunction() {
                                  var x = document.getElementById("mySelect").value;
                                    if (x=="Private") {
                                        var codeBlock = 
                                            '<div class="form-group">'+
                                                '<label>Class Password</label>'+
                                              
                                                '<input class="form-control" type="text" name="access_key" title="Password required by the students to access your class" required>'+
                                            '</div>';

                                    document.getElementById("wrapper").innerHTML = codeBlock
                                    }
                                    else
                                    {
                                        var codeBlock ='';
                                        document.getElementById("wrapper").innerHTML = codeBlock
                                    }
                                }
                            </script>
                            <div id="wrapper"></div>
                            <div class="reset button">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
