@extends('layouts.app')

@section('styles')
<style>
    body{
        background-color: ;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    a {
        color: #333 !important;
    }
    a{
        text-decoration: none;
    }
    .job-post{
        background-color: #ffff; border: 1px solid lightgray; margin: 10px; padding: 10px; 
    }
</style>
@endsection
@section('content')
<h1 class="text-center">Job Circular Feed</h1>
<div class="container-fluid pb-5">
    <div class="row job-post">
        <div class="col-md-6">
            <div class="job-post-item-header align-items-center">
                <span class="subadge">Partime</span>
                <h2 class="mr-3 text-black"><a href="#">Amilisa Zenon</a></h2>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="fa fa-map-marker"></span> <span>Western City, UK</span></div>
                <div><a href="#">Private Nurse</a></div>
            </div>
        </div>
        <div class="col-md-3" style="padding-left: 50px">
            <span>20 days</span>
            <p class="rate">৳20000</p>
        </div>
        <div class="col-md-3">
            <div class="pt-3">
                <a href="" class="btn btn-primary btn-lg">Hire</a>
            </div>
        </div>
    </div>
    <div class="row job-post">
        <div class="col-md-6">
            <div class="job-post-item-header align-items-center">
                <span class="subadge">Partime</span>
                <h2 class="mr-3 text-black"><a href="#">Jebin Selon</a></h2>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="fa fa-map-marker"></span> <span>Western City, UK</span></div>
                <div><a href="#">Private Nurse</a></div>
            </div>
        </div>
        <div class="col-md-3" style="padding-left: 50px">
            <span>20 days</span>
            <p class="rate">৳20000</p>
        </div>
        <div class="col-md-3">
            <div class="pt-3">
                <a href="" class="btn btn-primary btn-lg">Hire</a>
            </div>
        </div>
    </div>
    <div class="row job-post">
        <div class="col-md-6">
            <div class="job-post-item-header align-items-center">
                <span class="subadge">Partime</span>
                <h2 class="mr-3 text-black"><a href="#">Kemaya Rago</a></h2>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
                <div class="mr-3"><span class="fa fa-map-marker"></span> <span>Western City, UK</span></div>
                <div><a href="#">Private Nurse</a></div>
            </div>
        </div>
        <div class="col-md-3" style="padding-left: 50px">
            <span>20 days</span>
            <p class="rate">৳20000</p>
        </div>
        <div class="col-md-3">
            <div class="pt-3">
                <a href="" class="btn btn-primary btn-lg">Hire</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection