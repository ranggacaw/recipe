@extends('layouts.app')

@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="background: #111 url({{asset('recipes/images/recipes-bg.jpg')}}) center center / cover; padding: 100px 0;" data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">

    <div class="container clearfix">
        <div class="row">
            <div class="col-md-7">
                <h1 class="nott mb-5" data-animate="zoomIn">Recipes</h1>
                <span data-animate="zoomIn" data-delay="300" class="text-white-50">Makanan dan minuman segar, dari jus buah segar, smoothies sehat, hingga minuman beralkohol yang menggugah selera.</span>
            </div>
        </div>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
    <div class="content-wrap py-0" style="overflow: inherit;">

        <div class="recipe-items bg-light">
            <div class="row g-0 clearfix">
                <div class="col-lg-9 border-end-0 bg-white">
                    <div class="row g-0">

                        @foreach ($recipe as $item)
                            <div class="col-sm-4 col-6">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ url('http://recipes-admin.test/img/recipe')}}/{{$item->image}}" alt="image">
                                        <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                            <p class="card-author">By <a href="{{ url('recipe-details') }}/{{$item->id}}">{{ $item->users->name ?? 'None' }}</a></p>
                                        </div>
                                        <h3 class="card-title"><a href="{{ url('recipe-details') }}/{{$item->id}}" class="stretched-link">{{ $item->name }}</a></h3>
                                        <h5 class="card-date"><i class="icon-line2-calendar"></i>{{ $item->created_at->format('y-m-d') }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-12 d-flex justify-content-end p-4">
                            <a href="#" class="button button-circle m-0 text-end"><span>Next</span><i class="icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-5 px-4 position-sticky h-100" style="top: 80px">

                    <div class="row border-0">
                        <div class="col-lg-12 col-md-4 col-12 mt-5 mt-md-0 widget border-0 widget_links clearfix">

                            <h4 class="nott ls0">Recipes Categories</h4>
                            <ul>
                                <li><a href="#">All Categories</a></li>
                                <li><a href="#">Hot</a></li>
                                <li><a href="#">Ice</a></li>
                            </ul>

                        </div>

                        <div class="col-12 d-none d-lg-block border-0"><div class="line"></div></div>

                        <div id="w-video" class="col-lg-12 col-md-4 col-8 mt-5 mt-md-0 widget border-0 mt-0 clearfix">

                            <h4 class="nott ls0">Instagram Embeded Post</h4>
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/Bz8wijjD6gI/?hl=en" data-instgrm-version="12" style="background:#FFF; border:0; border-radius:10px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:100% !important; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"></blockquote><script async src="//www.instagram.com/embed.js"></script>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section m-0 center dark" style="background: linear-gradient(rgba(0,0,0,.6), rgba(0,0,0,.8)), url({{asset('recipes/images/about/2.jpg')}}) no-repeat center center / cover; padding: 140px 0;">
            <div class="container">
                <blockquote class="blockquote text-center border-0 m-auto" style="max-width: 700px">
                    <h2 class="h1 fw-bold text-capitalize" style="line-height: 1.4">To get the best results, you must talk to your Vegetables.</h2>
                    <footer class="blockquote-footer text-white-50 mt-4">Charles, <cite title="Source Title">Prince of Wales</cite></footer>
                </blockquote>
            </div>
        </div>

    </div>
</section><!-- #content end -->
@endsection