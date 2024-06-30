@extends('layouts.app')

@section('content')
<!-- Page Title
============================================= -->
<section id="slider" class="slider-element dark parallax include-header" style="background: #111 url({{ url('recipes/images/recipe-single.jpg')}}) center center / cover; padding: 230px 0;" data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">

    <div class="container clearfix">
        <div class="mx-auto center" style="max-width: 800px">
            <h3 class="nott fw-bold mb-5 display-4" data-animate="zoomIn">{{ $recipe->name }}</h3>
        </div>
        <div class="mx-auto center" style="max-width: 900px">
            <div class="slider-features" data-animate="zoomIn" data-delay="300">
                <ul class="list-unstyled row g-0 align-items-center justify-content-center overflow-hidden col-mb-50 mt-5">
                    <li class="col-6 col-md-2 text-center text-lg-start">
                        <div class="grid-inner px-5">
                            <img src="{{asset('recipes/images/icons/ingredients.svg')}}" alt="Ingredients" width="30">
                            <h5 class="mb-0">9 Ingredients</h5>
                        </div>
                    </li>

                    <li class="col-6 col-md-2 text-center text-lg-start">
                        <div class="grid-inner px-5">
                            <img src="{{asset('recipes/images/icons/start.svg')}}" alt="Reviews" width="30">
                            <h5 class="mb-0">223 Comments</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content" class="bg-light">
    <div class="content-wrap pt-0" style="overflow: visible;">
        <div class="container">

            <div class="card border-0 shadow-sm" style="top: -100px;">
                <div class="card-body px-4">
                    <div class="row align-items-center justify-content-between py-3">
                        <div class="col-12 col-xl">
                            <div class="row col-mb-30">
                                <div class="col-4 col-md col-lg-2">
                                    <h6 class="text-black-50 text-uppercase font-body fw-normal ls1 mb-1">Category</h6>
                                    <h4 class="mb-0">
                                        @if ($recipe->category !=1 )
                                            Ice
                                        @else
                                            Hot
                                        @endif
                                    </h4>
                                </div>

                                <div class="col-4 col-md col-lg-3">
                                    <h6 class="text-black-50 text-uppercase font-body fw-normal ls1 mb-1">Ingredients</h6>
                                    <h4 class="mb-0">
                                        {{ $ingredients_coma }}
                                    </h4>
                                </div>

                                <div class="col-4 col-md col-lg-2">
                                    <h6 class="text-black-50 text-uppercase font-body fw-normal ls1 mb-1">Sugar</h6>
                                    <h4 class="mb-0">12gm</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center col-xl-auto mt-5 mt-xl-0">
                            <a href="#" class="button button-circle m-0"><i class="icon-line-cloud-download"></i> Download</a>
                        </div>
                    </div>

                    <div class="line my-4"></div>

                    <div class="row justify-content-between mt-5 mb-4 clearfix">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="mb-0">Ingredients</h4>
                                <a href="javascript:window.print()" id="print-button" class="social-icon si-small si-colored si-print" title="Print">
                                    <i class="icon-line-printer"></i>
                                    <i class="icon-line-printer"></i>
                                </a>
                            </div>
                            <ul class="list-unstyled list-ingredients bg-light p-4">
                                <li>{!! $ingredients !!}</li>
                            </ul>
                            <div class="line line-sm"></div>
                            <h4>Share:</h4>
                            <a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-colored si-pinterest" title="Pinterest">
                                <i class="icon-pinterest"></i>
                                <i class="icon-pinterest"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="#" class="social-icon si-small si-colored si-email3" title="Email">
                                <i class="icon-email3"></i>
                                <i class="icon-email3"></i>
                            </a>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <h4>Photo</h4>
                            <div class="rounded position-relative dark mb-5" style="background: url({{ url('https://recipe-admin.ranggacaw.com/img/recipe')}}/{{$recipe->imageDetail}}); min-height: 300px"></div>
                            <h4>Preparation</h4>
                            <div class="px-5">
                                {!! $recipe->content !!}
                            </div>

                            <!-- Comments
                            ============================================= -->
                            <div id="comments" class="clearfix">

                                <h4 id="comments-title">Reviews</h4>

                                <!-- Comments List
                                ============================================= -->
                                {{-- <ol class="commentlist clearfix">

                                    <li class="comment even thread-even depth-1" id="li-comment-1">

                                        <div id="comment-1" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                    <img alt='Image' src='demos/articles/images/authors/2.jpg' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author">
                                                    Gunther David<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span>
                                                </div>

                                                <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                    <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                                        <div id="comment-2" class="comment-wrap clearfix">

                                            <div class="comment-meta">

                                                <div class="comment-author vcard">

                                                    <span class="comment-avatar clearfix">
                                                    <img alt='Image' src='demos/articles/images/authors/1.jpg' class='avatar avatar-60 photo' height='60' width='60' /></span>

                                                </div>

                                            </div>

                                            <div class="comment-content clearfix">

                                                <div class="comment-author">
                                                    <a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>John Doe</a>
                                                    <span>
                                                        <a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a>
                                                    </span>
                                                </div>

                                                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                            </div>

                                            <div class="clear"></div>

                                        </div>

                                    </li>

                                </ol> --}}
                                <!-- .commentlist end -->

                                <div class="clear"></div>

                                <!-- Comment Form
                                ============================================= -->
                                <div id="respond">

                                    <h4>Leave a <span>Review</span></h4>

                                    @if (Route::has('login'))
                                        @auth
                                            <form class="row" action="#" method="post" id="commentform">

                                                <div class="col-md-4 form-group">
                                                    <label class="nott ls0 fw-normal" for="author">Name</label>
                                                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control form-control-pill" />
                                                </div>

                                                <div class="col-md-4 form-group">
                                                    <label class="nott ls0 fw-normal" for="email">Email</label>
                                                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control form-control-pill" />
                                                </div>

                                                <div class="w-100"></div>

                                                <div class="col-12 form-group">
                                                    <label class="nott ls0 fw-normal" for="comment">Comment</label>
                                                    <textarea name="comment" cols="58" rows="7" tabindex="4" class="form-control form-control-pill"></textarea>
                                                </div>

                                                <div class="col-12 form-group">
                                                    <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-circle button-large mt-3">Submit a Review</button>
                                                </div>

                                            </form>
                                        @else
                                            <p>Please login, then you can leave a review.</p>
                                            
                                        @endauth
                                    @endif

                                </div><!-- #respond end -->

                            </div><!-- #comments end -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection