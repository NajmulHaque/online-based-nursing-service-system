@extends('layouts.app')
@section('title','Home')
@section('styles')

<link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div >
            <!--Carousel Wrapper-->
            <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#video-carousel-example" data-slide-to="1"></li>
                    <li data-target="#video-carousel-example" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img height="450px" width="100%" src="{{ asset('images/frontend/landing/slide01.jpg') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img height="450px" width="100%" src="{{ asset('images/frontend/landing/slide02.jpg') }}" alt="">
                    </div>
                    <div class="carousel-item">
                        <img height="450px" width="100%" src="{{ asset('images/frontend/landing/slide03.jpg') }}" alt="">
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                {{-- <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a> --}}
                <!--/.Controls-->
            </div>
            <!--Carousel Wrapper-->
        </div>
        <div id="slogan">
            <div class="title">In-Home Health Care</div>
            <div class="content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada nibh dui, id
                    ullamcorper arcu consectetur vitae.
                </p>
                <a href="#" class="btn-default btn1">request care now</a>
            </div>
        </div>
    </div>
</div>
<div id="main">
    {{-- <div id="slider_wrapper">
        <div id="slider">
            <div id="flexslider">
                <ul class="slides clearfix">
                    <li>
                        <img src="{{ asset('images/frontend/landing/slide01.jpg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/frontend/landing/slide02.jpg') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/frontend/landing/slide03.jpg') }}" alt="">
                    </li>

                </ul>
            </div>

            <div id="slogan">
                <div class="title">In-Home Health Care</div>
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada nibh dui, id
                        ullamcorper arcu consectetur vitae.
                    </p>
                    <a href="#" class="btn-default btn1">request care now</a>
                </div>
            </div>

            <div id="free">
                <div class="container">
                    <div class="free_inner">
                        <div class="free">
                            <div class="txt1">call us</div>
                            <div class="txt2">1-800-123-1234</div>
                            <div class="txt3"><span>or</span></div>
                            <div class="txt4"><a href="#" class="btn-default btn2">email us</a></div>
                            <div class="txt5">free consultation</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}

    <div class="nursing_wrapper">
        <div class="wave1"></div>
        <div class="nursing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title minheight1">
                            <div class="txt1">Professional In-Home Care</div>
                            <div class="txt2">Online Nursing Service</div>
                            <div class="txt3">the best and most comprehensive
                                hospice care services</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="caption minheight1">
                            <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong> Aenean malesuada
                            nibh dui, id ullamcorper arcu consectetur vitae. Phasellus at pellentesque augue, eget
                            malesuada mi. Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu
                            consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut
                            nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin. <a href="#">Mauris vel
                                laoreet risus.</a> Vestibulum lacinia facilisis est ac tincidunt. Sed in arcu tempus,
                            ornare magna eu, tristique lacus. Sed a elit sed odio bibendum condimentum. Donec in libero
                            nec risus condimentum commodo sed nec enim. Donec consequat, purus non interdum interdum,
                            tortor libero placerat leo, sed pellentesque sapien sem sed erat.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="get_wrapper">
        <div class="container">
            <div class="col-sm-4">
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="txt1">Get Quote</span>
                    <span class="txt2">Donec consequat, purus non interdum ...</span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span class="txt1">Scheduling</span>
                    <span class="txt2">Vestibulum eu nunc ac erat placerat rhoncus et id eros. Curabitur risus sem,
                        pellentesque a justo ac, rutrum placerat ipsum.</span>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span class="txt1">Career</span>
                    <span class="txt2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </a>
            </div>
        </div>
    </div>

    <div class="splash1">
        <div class="container">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#tabpanel" aria-controls="tabpanel" role="tab" data-toggle="tab"><span class="txt1">Why
                            Choose Us</span></a>
                </li>
                <li role="presentation">
                    <a href="#tabpane2" aria-controls="tabpane2" role="tab" data-toggle="tab"><span class="txt1">Common
                            Questions</span></a>
                </li>
                <li role="presentation">
                    <a href="#tabpane3" aria-controls="tabpane3" role="tab" data-toggle="tab"><span class="txt1">Become
                            Part Of Nursing Agency</span></a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="tabpanel">

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="title1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                            <p>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc dapibus
                                viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere
                                leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat arcu
                                non sollicitudin. Mauris vel laoreet risus. Vestibulum lacinia facilisis est ac
                                tincidunt. Sed in arcu tempus, ornare magna eu, tristique lacus. </p>
                        </div>
                        <div class="col-sm-4">
                            <ul class="ul1">
                                <li><a href="#">Phasellus at pellentesque augue</a></li>
                                <li><a href="#">Proin aliquet lorem non nunc dapibus viverra.</a></li>
                                <li><a href="#">Ut ultrices non dolor eu consectetur</a></li>
                                <li><a href="#">Aliquam vel posuere eros</a></li>
                                <li><a href="#">Semper posuere leo</a></li>
                                <li><a href="#">Vestibulum efficitur diam ut nulla</a></li>
                                <li><a href="#">Egestas malesuada</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="ul1">
                                <li><a href="#">Phasellus at pellentesque augue</a></li>
                                <li><a href="#">Proin aliquet lorem non nunc dapibus viverra.</a></li>
                                <li><a href="#">Ut ultrices non dolor eu consectetur</a></li>
                                <li><a href="#">Aliquam vel posuere eros</a></li>
                                <li><a href="#">Semper posuere leo</a></li>
                                <li><a href="#">Vestibulum efficitur diam ut nulla</a></li>
                                <li><a href="#">Egestas malesuada</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="tabpane2">

                    <div class="row">
                        <div class="col-sm-6">

                            <div class="dl1">
                                <dl class="dlq">
                                    <dt>Q:</dt>
                                    <dd>Scelerisque eget, malesuada at?</dd>
                                </dl>
                                <dl class="dla">
                                    <dt>A:</dt>
                                    <dd>Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non nunc
                                        dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros,
                                        semper posuere leo. </dd>
                                </dl>
                            </div>

                            <div class="dl1">
                                <dl class="dlq">
                                    <dt>Q:</dt>
                                    <dd>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</dd>
                                </dl>
                                <dl class="dla">
                                    <dt>A:</dt>
                                    <dd>Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla
                                        egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</dd>
                                </dl>
                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="dl1">
                                <dl class="dlq">
                                    <dt>Q:</dt>
                                    <dd>Quisque nullatibulum libero?</dd>
                                </dl>
                                <dl class="dla">
                                    <dt>A:</dt>
                                    <dd>Proin aliquet lorem non nunc dapibus viverra. Ut ultrices non dolor eu
                                        consectetur. Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur
                                        diam ut nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.
                                    </dd>
                                </dl>
                            </div>

                            <div class="dl1">
                                <dl class="dlq">
                                    <dt>Q:</dt>
                                    <dd>Nulla facilisinean nec eros?</dd>
                                </dl>
                                <dl class="dla">
                                    <dt>A:</dt>
                                    <dd>Ut ultrices non dolor eu consectetur. Aliquam vel posuere eros, semper posuere
                                        leo. Vestibulum efficitur diam ut nulla egestas malesuada. Sed venenatis feugiat
                                        arcu non sollicitudin.</dd>
                                </dl>
                            </div>

                        </div>
                    </div>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="tabpane3">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="thumb1">
                                <div class="thumbnail clearfix">
                                    <figure class="">
                                        <img src="{{ asset('images/frontend/landing/home01.png') }}" alt=""
                                            class="img-responsive">
                                    </figure>
                                    <div class="caption">
                                        <div class="title2">Looking for a good job?</div>
                                        <p>
                                            Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem non
                                            nunc dapibus viverra. Ut ultrices non dolor eu consectetur. Aliquam vel
                                            posuere eros, semper posuere leo.
                                        </p>
                                        <br>
                                        <a href="#" class="btn-default btn1">submit your resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <ul class="ul1">
                                <li><a href="#">Phasellus at pellentesque augue</a></li>
                                <li><a href="#">Proin aliquet lorem non nunc dapibus viverra.</a></li>
                                <li><a href="#">Ut ultrices non dolor eu consectetur</a></li>
                                <li><a href="#">Aliquam vel posuere eros</a></li>
                                <li><a href="#">Semper posuere leo</a></li>
                                <li><a href="#">Vestibulum efficitur diam ut nulla</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="services1">
                        <a href="#">
                            <figure><img src="{{ asset('images/frontend/landing/service1.jpg') }}" alt=""
                                    class="img-responsive"></figure>
                            <span class="caption">
                                <span class="txt1">24 Hours Service</span>
                                <span class="txt2">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet
                                    lorem non nunc dapibus viverra. Ut ultrices non dolor eu consectetur.</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services1">
                        <a href="#">
                            <figure><img src="{{ asset('images/frontend/landing/service2.jpg') }}" alt=""
                                    class="img-responsive"></figure>
                            <span class="caption">
                                <span class="txt1">Free Online Estimate</span>
                                <span class="txt2">Vivamus facilisis libero diam, molestie rutrum sem malesuada ac.
                                    Vestibulum faucibus ligula eu enim commodo volutpat.</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="services1">
                        <a href="#">
                            <figure><img src="{{ asset('images/frontend/landing/service3.jpg') }}" alt=""
                                    class="img-responsive"></figure>
                            <span class="caption">
                                <span class="txt1">In Home Health Care</span>
                                <span class="txt2">Suspendisse eget nunc nec diam gravida volutpat. Nulla ac ex at
                                    mauris laoreet facilisis.</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="parallax1" class="parallax">
        <div class="bg1 parallax-bg"></div>
        <div class="overlay"></div>
        <div class="parallax-content">
            <div class="container">

                <div class="txt1">we have more experienced staff and do not outsource</div>
                <div class="txt2">We provide the best medical team!</div>
                <div class="txt3"><a href="#" class="btn-default btn1">request care now</a></div>

            </div>
        </div>
    </div>

    <div class="review_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <div class="title3">CUSTOMER REVIEWS</div>

                    <div class="review1 clearfix">
                        <div class="text">
                            <div class="txt1">Professional and friendly care team! </div>
                            <div class="txt2">Phasellus at pellentesque augue, eget malesuada mi. Proin aliquet lorem
                                non nunc dapibus viverra. <a href="#">Ut ultrices non dolor eu consectetur.</a> Aliquam
                                vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut nulla egestas
                                malesuada. Sed venenatis feugiat arcu non sollicitudin. </div>
                        </div>
                        <div class="author">
                            <figure><img src="{{ asset('images/frontend/landing/customer1.jpg') }}" alt=""
                                    class="img-responsive"></figure>
                            <div class="name"><strong>Connor Walker</strong> - Customer</div>
                        </div>
                    </div>

                    <div class="hl1"></div>

                    <div class="review1 clearfix">
                        <div class="text">
                            <div class="txt1">Professional and friendly care team! </div>
                            <div class="txt2">Aliquam vel posuere eros, semper posuere leo. Vestibulum efficitur diam ut
                                nulla egestas malesuada. Sed venenatis feugiat arcu non sollicitudin.</div>
                        </div>
                        <div class="author">
                            <figure><img src="{{ asset('images/frontend/landing/customer2.jpg') }}" alt=""
                                    class="img-responsive"></figure>
                            <div class="name"><strong>Alexa Smith</strong> - Customer</div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">

                    <div class="quote_wrapper">

                        <div class="title4">GET A QUICK <span>QUOTE</span></div>
                        <div class="title5">contact us for more information</div>

                        <br>

                        <div id="note"></div>
                        <div id="fields">
                            <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!');">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="name"
                                                value="First Name" onBlur="if(this.value=='') this.value='First Name'"
                                                onFocus="if(this.value =='First Name' ) this.value=''">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputLName">Last Name</label>
                                            <input type="text" class="form-control" id="inputLName" name="lname"
                                                value="Last Name" onBlur="if(this.value=='') this.value='Last Name'"
                                                onFocus="if(this.value =='Last Name' ) this.value=''">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputEmail">Email</label>
                                            <input type="text" class="form-control" id="inputEmail" name="email"
                                                value="E-mail address"
                                                onBlur="if(this.value=='') this.value='E-mail address'"
                                                onFocus="if(this.value =='E-mail address' ) this.value=''">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="inputPhone">Phone</label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone"
                                                value="Phone" onBlur="if(this.value=='') this.value='Phone'"
                                                onFocus="if(this.value =='Phone' ) this.value=''">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="inputMessage">Your Message</label>
                                            <textarea class="form-control" rows="5" id="inputMessage" name="content"
                                                onBlur="if(this.value=='') this.value='Message'"
                                                onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn-default btn-cf-submit">Submit</button>
                            </form>
                        </div>




                    </div>



                </div>
            </div>


        </div>
    </div>

    <div id="banner_wrapper">
        <div id="banner_inner">
            <div class="">
                <div id="banner">
                    <div class="container">
                        <a class="banner_prev" href="#"></a>
                        <a class="banner_next" href="#"></a>
                        <div class="carousel-box">
                            <div class="inner">
                                <div class="carousel main">
                                    <ul>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="#">
                                                        <figure><img
                                                                src="{{ asset('images/frontend/landing/partner1.jpg') }}"
                                                                alt="" class="img-responsive"><em></em></figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="#">
                                                        <figure><img
                                                                src="{{ asset('images/frontend/landing/partner2.jpg') }}"
                                                                alt="" class="img-responsive"><em></em></figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="#">
                                                        <figure><img
                                                                src="{{ asset('images/frontend/landing/partner3.jpg') }}"
                                                                alt="" class="img-responsive"><em></em></figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="banner">
                                                <div class="banner_inner">
                                                    <a href="#">
                                                        <figure><img
                                                                src="{{ asset('images/frontend/landing/partner4.jpg') }}.jpg"
                                                                alt="" class="img-responsive"><em></em></figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script src="{{ asset('assets/js/jquery.js')}}" )></script>
<script src="{{ asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/js/superfish.js') }}"></script>
<script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.equalheights.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ui.totop.js') }}"></script>
<script src="{{ asset('assets/js/jquery.caroufredsel.js') }}"></script>
<script src="{{ asset('assets/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.parallax-1.1.3.resize.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/cform.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection