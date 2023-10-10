<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700|Noto+Serif:400,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/settings.css')}}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/navigation.css')}}">

	<!-- ADD-ONS CSS FILES -->
	<link rel="stylesheet" type="text/css" href="{{ asset('include/rs-plugin/css/addons/revolution.addon.liquideffect.css')}}">

	<!--  Recipes Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/colors.php?color=1ABC9C')}}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{ asset('recipes/css/fonts.css')}}" type="text/css" /> <!-- Theme Font -->
	<link rel="stylesheet" href="{{ asset('recipes/recipes.css')}}" type="text/css" /> <!-- Theme Custom CSS -->

	<style>
		.dt-shadow{text-shadow:0px 10px 30px rgba(0,0,0,1)}#rev_slider_131_1 .uranus.tparrows{width:50px; height:50px; background:rgba(255,255,255,0)}#rev_slider_131_1 .uranus.tparrows:before{width:50px; height:50px; line-height:50px; font-size:40px; transition:all 0.3s;-webkit-transition:all 0.3s}#rev_slider_131_1 .uranus.tparrows:hover:before{opacity:0.75}.slotholder canvas { height: 100% !important; }
	</style>
	<!-- / -->

	<!-- Document Title
	============================================= -->
	<title>Recipes | Canvas</title>

</head>
<body class="stretched">
    <!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">
        @include('layouts.header')

        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <!-- Content
		============================================= -->
		@yield('content')
		<!-- #content end -->

        @include('layouts.footer')
    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/plugins.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- ADD-ONS JS FILES -->
	<script src="{{ asset('include/rs-plugin/js/pixi.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/addons/revolution.addon.liquideffect.min.js') }}"></script>

	<!-- SLIDER REVOLUTION EXTENSIONS  -->
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

	<script>
		var revapi2,
		tpj;
		var $ = jQuery.noConflict();
		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

			function onLoad() {
				if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}

				if(tpj("#rev_slider_2_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_2_1");
				}else{
					revapi2 = tpj("#rev_slider_2_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"include/rs-plugin/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:false,
								hide_onleave:false,
								tmp:'',
								left: {
									h_align:"right",
									v_align:"bottom",
									h_offset:80,
									v_offset:30
								},
								right: {
									h_align:"right",
									v_align:"bottom",
									h_offset:20,
									v_offset:30
								}
							}
						},
						responsiveLevels:[1200,992,768,576],
						visibilityLevels:[1200,992,768,576],
						gridwidth:[1200,992,768,576],
						gridheight:[868,768,960,720],
						lazyType:"all",
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"on",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "0",
						fullScreenOffset: "",
						disableProgressBar:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}; /* END OF revapi call */

				RsLiquideffectAddOn(tpj, revapi2);

				if(typeof ExplodingLayersAddOn !== "undefined") ExplodingLayersAddOn(tpj, revapi2);
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>
</body>
</html>
