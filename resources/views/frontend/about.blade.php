@extends('layouts.app')
@section('title','eVendor | About')

@section('styles')
<style>
    a{
        text-decoration: none;
        color: #333;
    }
</style>
@endsection
@section('content')
    <section class="breadcrumb-section py-2" style="background-color: lightgray;color:#333">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About Us</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home /</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
@section('scripts')
@endsection