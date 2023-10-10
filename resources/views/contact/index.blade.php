@extends('layouts.app')

@section('content')
<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark include-header" style="background: #111 url({{asset('recipes/images/contact-bg.jpg')}}) center center / cover; padding: 100px 0;" data-0="background-position:0px -200px;" data-400="background-position:0px -100px;">

    <div class="container clearfix">
        <div class="row">
            <div class="col-md-7">
                <h1 class="nott mb-3" data-animate="zoomIn">Contact Us</h1>
                <span data-animate="zoomIn" data-delay="300" class="text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
            </div>
        </div>
    </div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content" class="bg-light" style="overflow: inherit;">

    <div class="content-wrap">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <h2 class="nott mb-5">Get Connect with Us!</h2>
                    <p class="lead">Questions? Comments? Please fill out the Form or Email us at <a href="mailto:noreply@canvas.com">noreply@canvas.com</a>.</p>
                    <p>Thank you for being in touch!</p>
                    <div class="line line-sm"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga debitis deleniti dolores cupiditate quia reiciendis, obcaecati facere. Amet et enim itaque sapiente. Culpa, incidunt,p eveniet.</p>
                    <p>Collaboratively redefine fully tested processes and extensible partnerships. Professionally exploit team building opportunities rather than client-focused e-markets. Objectively deliver functionalized platforms through client-centric.</p>
                </div>
                <div class="col-md-6">
                <h4>Send us an Email</h4>

                <div class="form-widget" data-alert-type="inline">

                    <div class="form-result"></div>

                    <form class="row mb-0" id="recipe-contactform" name="recipe-contactform" action="include/form.php" method="post">

                        <div class="form-process bg-transparent">
                            <div class="css3-spinner">
                                <div class="css3-spinner-scaler"></div>
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="nott ls0 fw-normal" for="recipe-contactform-name">Name <small>*</small></label>
                            <input type="text" id="recipe-contactform-name" name="recipe-contactform-name" value="" class="form-control form-control-pill required" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="nott ls0 fw-normal" for="recipe-contactform-email">Email <small>*</small></label>
                            <input type="email" id="recipe-contactform-email" name="recipe-contactform-email" value="" class="required email form-control form-control-pill" />
                        </div>

                        <div class="w-100"></div>

                        <div class="col-md-6 form-group">
                            <label class="nott ls0 fw-normal" for="recipe-contactform-phone">Phone</label>
                            <input type="text" id="recipe-contactform-phone" name="recipe-contactform-phone" value="" class="form-control form-control-pill" />
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="nott ls0 fw-normal" for="recipe-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="recipe-contactform-subject" name="subject" value="" class="required form-control form-control-pill" />
                        </div>

                        <div class="w-100"></div>

                        <div class="col-12 form-group">
                            <label class="nott ls0 fw-normal" for="recipe-contactform-message">Message <small>*</small></label>
                            <textarea class="required form-control form-control-pill" id="recipe-contactform-message" name="recipe-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col-12 form-group d-none">
                            <input type="text" id="recipe-contactform-botcheck" name="recipe-contactform-botcheck" value="" class="form-control form-control-pill" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-circle button-large m-0" type="submit" id="recipe-contactform-submit" name="recipe-contactform-submit" value="submit">Send Message</button>
                        </div>

                        <input type="hidden" name="prefix" value="recipe-contactform-">
                        <input type="hidden" name="subject" value="Messgae From Canvas Recipe">
                        <input type="hidden" name="html_title" value="Canvas Recipe Contact Message">

                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>
</section><!-- #content end -->
@endsection