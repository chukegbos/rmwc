<section>
    <div class="gap gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row merged20" id="page-contents">        
                        <div class="col-lg-3">
                            <aside class="sidebar static">
                                <div class="widget stick-widget">
                                    <h4 class="widget-title">Component</h4>
                                    <ul class="naves">
                                        <li>
                                            <i class="ti-clipboard"></i>
                                            <a href="#" title="">Accountability systems</a>
                                        </li>
                                        <li>
                                            <i class="ti-mouse-alt"></i>
                                            <a href="#" title="">Weekly Review</a>
                                        </li>
                                        <li>
                                            <i class="ti-files"></i>
                                            <a href="#" title="">Recommended Books</a>
                                        </li>
                                        <li>
                                            <i class="ti-user"></i>
                                            <a href="#" title="">Buy Books</a>
                                        </li>
                                        <li>
                                            <i class="ti-image"></i>
                                            <a href="#" title="">Book Shop</a>
                                        </li>
                                        <li>
                                            <i class="ti-video-camera"></i>
                                            <a href="#" title="">Book Clubs</a>
                                        </li>
                                        <li>
                                            <i class="ti-comments-smiley"></i>
                                            <a href="#" title="">Top online journals to follow </a>
                                        </li>
                                        <li>
                                            <i class="ti-bell"></i>
                                            <a href="#" title="">Top books to read</a>
                                        </li>
                                        <li>
                                            <i class="ti-share"></i>
                                            <a href="#" title="">Bookcamp</a>
                                        </li>
                                        <li>
                                            <i class="fa fa-bar-chart-o"></i>
                                            <a href="#" title="">Talks and Interviews </a>
                                        </li>
                                        <li>
                                            <i class="ti-power-off"></i>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div><!-- Shortcuts -->
                            </aside>
                        </div><!-- sidebar -->
