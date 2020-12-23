@extends('layouts.app')

@section('styles')
<style>
    body {
        background-color: ;
    }

    h1,
    h2,
    h4,
    h5,
    a {
        color: #333 !important;
    }

    a {
        text-decoration: none;
    }

    .job-post {
        background-color: #ffff;
        border: 1px solid lightgray;
        margin: 10px;
        padding: 10px;
    }

    #request-headline h3 {
        text-align: center;
        box-shadow: 0 1px 7px 0;
        padding: 10px;
        font-size: 20px;
        color: green;
    }
    .post-button a{ color: #fff !important}
</style>
@endsection
@section('content')
<div class="container">
    <div class="row" style="justify-content: center">
        <div class="col-md-6 col-lg-6 p-5 text-success" id="request-headline">
            <h3>Job Circular Feed</h3>
        </div>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        @forelse ($nurseDetails as $nurse)
        <div class="col col-md-6">
            <div class="row job-post">
                <div class="col-md-9">
                    <div>
                        <span class="subadge">Partime</span>
                        <h2 class="mr-3 text-black"><a href="{{ route('eVendor.nurse_dashboard',$nurse->id)}}">{{$nurse->name}}</a></h2>
                    </div>
                    <div>
                        <div class="mr-3">
                            <span class="fa fa-map-marker"></span> 
                            <span>Bashundhara R/A, Dhaka</span>
                            <span class="pl-3 text-primary">Private Nurse</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 post-button">
                    <a href="{{ route('nurse.hired', $nurse->id) }}" type="button" class="btn btn-primary btn-lg mt-4">Hire</a>
                </div>
            </div>
        </div>
        @empty
            <div>No Nurse Found</div>
        @endforelse
    </div>
</div>
@endsection
@section('scripts')

@endsection