<!-- Header
============================================= -->
<header id="header" class="transparent-header" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="{{ url('/') }}" class="standard-logo"><img src="{{asset ('images/logo/logo.png')}}" alt="cawstudio Logo"></a>
                    <a href="{{ url('/') }}" class="retina-logo"><img src="{{asset ('images/logo/logo.png')}}" alt="cawstudio Logo"></a>
                </div><!-- #logo end -->

                {{-- <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
                    </div><!-- #top-search end -->

                </div> --}}

                <div id="primary-menu-trigger">
                    <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        @if (Route::has('login'))
                            @auth
                                <li class="menu-item"><a href="{{ url('/') }}" class="menu-link"><div>Home</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('recipe') }}"><div>Recipes</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('about') }}"><div>About Us</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('contact') }}"><div>Contact Us</div></a></li>
                                <li class="menu-item">
                                    <a href="{{ route('logout') }}" class="menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <div>Log Out</div>
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            @else
                                <li class="menu-item"><a href="{{ url('/') }}" class="menu-link"><div>Home</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('recipe') }}"><div>Recipes</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('about') }}"><div>About Us</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="{{ url('contact') }}"><div>Contact Us</div></a></li>
                                <li class="menu-item"><a href="{{ route('login') }}" class="menu-link"><div>Log in</div></a></li>
                                @if (Route::has('register'))
                                    <li class="menu-item"><a href="{{ route('register') }}" class="menu-link"><div>Register</div></a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>

                </nav><!-- #primary-menu end -->

                {{-- <form class="top-search-form" action="search.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form> --}}

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->