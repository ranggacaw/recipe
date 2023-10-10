@extends('layouts.app')

@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax include-header" style="background-image: url({{asset('recipes/images/about/bg.jpg')}}); background-size: cover; padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

    <div class="container clearfix">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="nott mb-5" data-animate="zoomIn">We Serve The Best Quality Food</h1>
                <span data-animate="zoomIn" data-delay="300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga debitis deleniti dolores cupiditate quia reiciendis, obcaecati facere. Amet et enim itaque sapiente. Culpa, incidunt, eveniet.</span>
                <a href="recipes.html" class="button button-large button-circle ms-0 mt-5 px-4" data-animate="zoomIn" data-delay="500">View All Recipes</a>
            </div>
            <div class="col-md-4">
                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video">
                    <i class="icon-play"></i>
                </a>
            </div>
        </div>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap pb-0">

        <div class="section bg-transparent p-0">
            <div class="container">
                <div class="row align-items-center clearfix">
                    <div class="col-md-6">
                        <h2 class="nott mb-5">We Serve The Best Quality Food</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga debitis deleniti dolores cupiditate quia reiciendis, obcaecati facere. Amet et enim itaque sapiente. Culpa, incidunt,p eveniet.</p>
                        <p>Collaboratively redefine fully tested processes and extensible partnerships. Professionally exploit team building opportunities rather than client-focused e-markets. Objectively deliver functionalized platforms through client-centric.</p>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="about-img position-relative px-4">
                            <img src="{{asset('recipes/images/about/1-1.jpg')}}" alt="About Image">
                            <img src="{{asset('recipes/images/about/1.jpg')}}" alt="About Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="section bg-light mb-0 mt-3" style="padding: 100px 0">
            <div class="container">
                <div class="heading-block center mx-auto" style="max-width: 700px">
                    <h2 class="mb-3">Our Services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae veniam quam incidunt eos eaque esse ducimus dolore, velit, laborum dignissimos?</p>
                </div>
                <div class="clear"></div>
                <div class="row align-items-stretch justify-content-center">
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-5">
                                <div class="feature-box flex-column fbox-light fbox-plain">
                                    <div class="fbox-icon mx-0 bottommargin-sm">
                                        <img src="{{asset('recipes/images/icons/award.svg')}}" alt="Icon" style="height: 60px">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="ls0 nott mb-4">#1 Recipes Story Website</h3>
                                        <p>Compellingly supply mission-critical imperatives for functional meta-services. Completely parallel task distributed materials.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-5">
                                <div class="feature-box flex-column fbox-light fbox-plain">
                                    <div class="fbox-icon mx-0 bottommargin-sm">
                                        <img src="{{asset('recipes/images/icons/cuisine.svg')}}" alt="Icon" style="height: 60px">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="ls0 nott mb-4">All Type Cuisines</h3>
                                        <p>Continually iterate resource-leveling applications through next-generation manufactured products. Quickly transform technically sound.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mt-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-5">
                                <div class="feature-box flex-column fbox-light fbox-plain">
                                    <div class="fbox-icon mx-0 bottommargin-sm">
                                        <img src="{{asset('recipes/images/icons/menu.svg')}}" alt="Icon" style="height: 60px">
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="ls0 nott mb-4">Detailed Description Menu</h3>
                                        <p>Synergistically conceptualize e-business services before cross-unit methods of empowerment. Continually target collaborative.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section m-0 bg-transparent py-5">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center">
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/cnn.svg" alt="Brands"></a></div>
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/github.svg" alt="Brands"></a></div>
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/google.svg" alt="Brands"></a></div>
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/paypal.svg" alt="Brands"></a></div>
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/vimeo.svg" alt="Brands"></a></div>
                    <div class="flex-fill p-3"><a href="#"><img src="demos/conference/images/sponcors/slack.svg" alt="Brands"></a></div>
                </div>
            </div>
        </div>

        <div class="section m-0 center dark" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.8)), url({{asset('/recipes/images/about/2.jpg')}}) no-repeat center center / cover; padding: 120px 0;">
            <div class="container">
                <blockquote class="blockquote text-center border-0 m-auto" style="max-width: 700px">
                    <h2 class="h1 fw-bold text-capitalize" style="line-height: 1.4">To get the best results, you must talk to your Vegetables.</h2>
                    <footer class="blockquote-footer text-white-50 mt-4">Charles, <cite title="Source Title">Prince of Wales</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>
@endsection