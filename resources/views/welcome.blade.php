@extends('layouts.app')

@section('content')
@include('layouts.slider_home')

<section id="content">
    <div class="content-wrap pb-0" style="overflow: visible;">

        <div class="section mt-2 bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 center">
                        <h2 class="text-title-light text-dark mb-5 ls1 text-uppercase">Hai Sahabat F&B !</h2>
                        <p style="font-size: 17px; color: #777">Kami adalah sekelompok pecinta makanan dan minuman yang berdedikasi untuk berbagi kelezatan dari berbagai belahan dunia. Dengan passion dan kreativitas, kami menghadirkan resep-resep yang dapat dinikmati oleh semua orang, dari pemula hingga koki berpengalaman.<br><br>Kamu juga bisa loh menulis <a href="https://recipe-admin.ranggacaw.com/" target="_blank" rel="noopener noreferrer">resep disni</a>!</p>
                    </div>
                    <div class="col-12 mt-5 mb-3">
                        <h3 class="center">Pilih Kategori</h3>

                        <div class="recipe-categories justify-content-center">
                            <a href="#" data-animate="fadeInUp" data-delay="600" class="recipe-category" style="background-image: url('recipes/images/categories/drinks.jpg');">
                                <div class="recipe-category-inner">
                                    <div class="recipe-category-icon"><img src="recipes/images/icons/drinks.svg" alt="Minuman Dingin"></div>
                                    <div class="recipe-category-info">Minuman Dingin</div>
                                </div>
                            </a>

                            <a href="#" data-animate="fadeInUp" data-delay="600" class="recipe-category" style="background-image: url('recipes/images/categories/hot.jpg');">
                                <div class="recipe-category-inner">
                                    <div class="recipe-category-icon"><img src="recipes/images/icons/menu.svg" alt="Minuman Panas"></div>
                                    <div class="recipe-category-info">Minuman Panas</div>
                                </div>
                            </a>

                            <a href="#" data-animate="fadeInUp" data-delay="600" class="recipe-category" style="background-image: url('recipes/images/categories/lunch.jpg');">
                                <div class="recipe-category-inner">
                                    <div class="recipe-category-icon"><img src="recipes/images/icons/lunch.svg" alt="Makanan"></div>
                                    <div class="recipe-category-info">Makanan</div>
                                </div>
                            </a>

                            <a href="#" data-animate="fadeInUp" data-delay="600" class="recipe-category" style="background-image: url('recipes/images/categories/desserts.jpg');">
                                <div class="recipe-category-inner">
                                    <div class="recipe-category-icon"><img src="recipes/images/icons/desserts.svg" alt="Kue"></div>
                                    <div class="recipe-category-info">Kue</div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="section recipe-items p-0" style="overflow: visible;background-color: #f9f9f9">
            <div class="row align-items-stretch align-content-stretch g-0">
                <div class="col-lg-4 dark">
                    <div class="position-sticky min-vh-60 min-vh-md-100 d-flex flex-column align-items-center center justify-content-center" style="top:0; background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('recipes/images/popular/side-bg.jpg') center center / cover;">
                        <h2 class="display-4 px-3 center fw-bold d-block">Resep<br>Terbaru</h2>
                        <a href="{{url('recipe')}}" class="button button-large button-light button-white button-circle m-0 px-5">Lihat Semua</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-0">

                        <!-- Item 1 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                    <img src="recipes/images/popular/1.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Gunther Beard</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.6</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Green Goddess Avocado Hummus</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Dec 26, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/2.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Chauffina Carr</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.9</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Strawberry Kiwi Healthy Bowl</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Dec 1, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/3.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Eric Widget </a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.3</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Rustic Sweet Treat</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Nov 20, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/4.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Quiche Hollandaise</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">A Delicious Homemade Breakfast</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Oct 2, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/5.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Norman Gordon</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Pumpkin Bars with Cream Cheese Frosting</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 18, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/6.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Druid Wensleydale</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.0</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">The Best Homemade Pizza Recipes</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Sep 7, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/7.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Bailey Wonger</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Baked Salmon with Sweet-Potatoes</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Aug 12, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/8.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Pelican Steve</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.2</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">A Kollam Grilled Cheese with Vegetables</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Aug 8, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 9 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/9.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Malcolm Function</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.3</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Garden Veggie Delux Pizza</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Jul 26, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 10 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/10.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Dianne Ameter</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.5</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Spinach Artichoke Dip Pasta with Chicken</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>Jun 15, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 11 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/11.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Weir Doe</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.4</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Quick Black Pepper Pork Lunch</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>May 11, 2021</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Item 12 -->
                        <div class="col-sm-4 col-6">
                            <div class="card">
                                <div class="card-body">
                                <img src="recipes/images/popular/12.png" alt="image">
                                    <div class="d-flex justify-content-between align-items-center mt-4 mb-2">
                                        <p class="card-author">By <a href="#">Niles Peppertrout</a></p>
                                        <span class="badge bg-primary bg-color"><i class="icon-star3"></i> 4.0</span>
                                    </div>
                                    <h3 class="card-title"><a href="#" class="stretched-link">Afternoon Plates of Pasta</a></h3>
                                    <h5 class="card-date"><i class="icon-line2-calendar"></i>May 4, 2021</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-transparent" style="padding: 100px 0">
            <div class="container">
                <h2 class="text-title-light" style="margin: 0 0 -20px 15px;">Resep Minggu Ini</h2>
                <div id="recipes-carousel" class="owl-carousel carousel-widget" data-margin="0" data-nav="true" data-pagi="false" data-items="1">
                    <div class="row g-0 align-items-stretch rounded shadow">
                        <div class="col-lg-5 rounded-start" style="background: url('recipes/images/recipe-week.jpg') no-repeat center center / cover; min-height: 300px">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video stretched-link">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-center flex-column rounded-end" style="padding: 80px 50px">
                            <h3>Earthy Pasta with Chestnuts and Mushrooms</h3>
                            <p>Distinctively leverage other's user friendly methods of empowerment and magnetic niche markets. Appropriately utilize accurate web-readiness through integrated results. Globally pursue high-quality web-readiness with value-added "outside the box" thinking. Dramatically optimize next-generation information after turnkey technologies.</p>
                            <div class="slider-features d-none d-sm-block my-3">
                                <ul class="list-unstyled">
                                    <li class="d-inline-block me-4">
                                        <img src="recipes/images/icons/timer-dark.svg" alt="Timer" width="30">
                                        <h5 class="mb-0">40 Menit</h5>
                                    </li>

                                    <li class="d-inline-block me-4">
                                        <img src="recipes/images/icons/ingredients-dark.svg" alt="ingredients" width="30">
                                        <h5 class="mb-0">9 Bahan-bahan</h5>
                                    </li>

                                    <li class="d-inline-block">
                                        <img src="recipes/images/icons/kcal-dark.svg" alt="kcal" width="30">
                                        <h5 class="mb-0">600 Kcal</h5>
                                    </li>
                                </ul>
                            </div>
                            <div><a href="#" class="button button-circle button-large m-0 fw-semibold nott ls0 text-end">Lihat Resep <i class="icon-angle-right"></i></a></div>
                        </div>
                    </div>

                    <div class="row g-0 align-items-stretch rounded shadow">
                        <div class="col-lg-5 rounded-start dark" style="background: url('recipes/images/recipe-week-2.jpg') no-repeat center center / cover; min-height: 300px">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video stretched-link">
                                <i class="icon-play"></i>
                            </a>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-center flex-column rounded-end" style="padding: 80px 50px">
                            <h3>Wholesome Pancakes with Orange</h3>
                            <p>Distinctively leverage other's user friendly methods of empowerment and magnetic niche markets. Appropriately utilize accurate web-readiness through integrated results. Globally pursue high-quality web-readiness with value-added "outside the box" thinking. Dramatically optimize next-generation information after turnkey technologies.</p>
                            <div class="slider-features d-none d-sm-block my-3">
                                <ul class="list-unstyled">
                                    <li class="d-inline-block me-4">
                                        <img src="recipes/images/icons/timer-dark.svg" alt="Timer" width="30">
                                        <h5 class="mb-0">32 Menit</h5>
                                    </li>

                                    <li class="d-inline-block me-4">
                                        <img src="recipes/images/icons/ingredients-dark.svg" alt="ingredients" width="30">
                                        <h5 class="mb-0">5 Bahan-bahan</h5>
                                    </li>

                                    <li class="d-inline-block">
                                        <img src="recipes/images/icons/kcal-dark.svg" alt="kcal" width="30">
                                        <h5 class="mb-0">300 Kcal</h5>
                                    </li>
                                </ul>
                            </div>
                            <div><a href="#" class="button button-circle button-large m-0 fw-semibold ls0 nott text-end">Lihat Resep <i class="icon-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section mb-0" style="padding: 100px 0">
            <div class="container">
                <div class="row clearfix">
                    <div class="heading-block center col-md-6 offset-3">
                        <h2 class="mb-3">Update Artikel Terbaru</h2>
                        <p>Menginspirasi dan mempermudah Anda dalam mengeksplorasi dunia kuliner. Kami percaya bahwa setiap hidangan memiliki cerita dan keunikan tersendiri, dan kami ingin membantu Anda menemukan dan menciptakan momen-momen istimewa melalui artikel masakan.</p>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="row clearfix">
                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="recipes/images/blog/piping-bag.jpg" class="card-img-top" alt="Image">
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">How to Make Paper Piping-Bag</h4>
                                <p class="card-text">Authoritatively productize 24/7 platforms authoritatively rather than enterprise customer service.</p>
                                <a href="#" class="card-link stretched-link">Learn More <i class="icon-angle-right position-relative ms-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="recipes/images/blog/healthy-food.jpg" class="card-img-top" alt="Image">
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">Top 10 Healthy Foods of 2021</h4>
                                <p class="card-text">Dramatically initiate authoritatively interactive e-tailers with enterprise results phosfluorescently.</p>
                                <a href="#" class="card-link stretched-link">Learn More <i class="icon-angle-right position-relative ms-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4">
                        <div class="card border-0 shadow-sm">
                            <img src="recipes/images/blog/meal-prep.jpg" class="card-img-top" alt="Image">
                            <div class="card-body" style="padding: 40px">
                                <h4 class="card-title mb-3">Top Vegetarian Meal Preps</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link stretched-link">Learn More <i class="icon-angle-right position-relative ms-2" style="top: 2px"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section m-0" style="background: url('recipes/images/subscribe-bg.jpg') no-repeat center center / cover; min-height: 300px; padding: 120px 0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mt-4 mt-sm-0 subscribe-widget" data-loader="button">
                        <img src="recipes/images/icons/email.svg" alt="Enmail Icon" width="60" class="mb-4">
                        <div class="heading-block border-bottom-0 mb-5">
                            <h2 class="nott ls0 mb-1">Stay Updated!</h2>
                            <p class="lead text-muted">Easy Recipes and Cookings right to your Inbox</p>
                        </div>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="mb-0">
                            <div class="input-group input-group-lg">
                                <input type="email" name="widget-subscribe-form-email" class="form-control required" placeholder="Enter Your Email Address..">
                                <button type="submit" class="btn text-white bg-color px-4" id="inputGroup-sizing-lg">Subscribe</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
@endsection