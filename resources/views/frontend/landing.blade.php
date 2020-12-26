@extends('layouts.app')
@section('title','eVendor | Home')
@section('styles')
<style>
    ul.navbar-nav.ml-auto {
        float: right;
    }
    a{ text-decoration: none !important;}
</style>
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="main">

    <div id="slider_wrapper">
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
                        Online nursing service system is an online nurse hire and medical tips facilities service
                        system. Basically this idea is about helping the unemployed nurse and some people who are
                        looking for private nurse service.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="nursing_wrapper">
        <div class="wave1"></div>
        <div class="nursing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="title minheight1">
                            <div class="txt1">Professional In-Home Care</div>
                            <div class="txt1">Online Nursing Service</div>
                            <div class="txt3">the best and most comprehensive
                                hospice care services</div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="caption minheight1">
                            Online nursing service system is an online nurse hire and medical tips facilities service
                            system. Basically this idea is about helping the unemployed nurse and some people who are
                            looking for private nurse service. We know that many patients have serious diseases who
                            badly need medical assistance. In fact many nurses are unable to search for a job just like
                            a man and many of them need online support to get a job. Even though we know in our country
                            there’s no online support agency to help them. That’s one of the major reasons to work on
                            this problem and make a system to solve this problem.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="get_wrapper">
        <div class="container">
            <div class="col-sm-4 text-center">
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    <span class="txt1">Get Quote</span>
                </a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="#">
                    <i class="fa fa-calendar"></i>
                    <span class="txt1">Scheduling</span>
                </a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="#">
                    <i class="fa fa-user-md"></i>
                    <span class="txt1">Career</span>
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
                            <p>Online nursing service system is an online nurse hire and medical tips facilities service
                                system. Basically this idea is about helping the unemployed nurse and some people who
                                are looking for private nurse service. We know that many patients have serious diseases
                                who badly need medical assistance. </p>
                        </div>
                        <div class="col-sm-4">
                            <p>Some people who are looking for private nurse service. That’s one of the major reasons to work on this problem and make a system to solve this problem.</p>
                        </div>
                        <div class="col-sm-4">
                           <p>Even though we know in our country there’s no online support agency to help them. That’s one of the major reasons to work on this problem and make a system to solve this problem.</p>
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
                                <span class="txt2">Online nursing service system is an online nurse hire and medical
                                    tips facilities service system. Basically this idea is about helping the unemployed
                                    nurse.</span>
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
                                <span class="txt2">Some people who are looking for private nurse service. That’s one of
                                    the major reasons to work on this problem and make a system to solve this problem.
                                </span>
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
                                <span class="txt2">Even though we know in our country there’s no online support agency
                                    to help them. That’s one of the major reasons to work on this problem and make a
                                    system to solve this problem. </span>
                            </span>
                        </a>
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