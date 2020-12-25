@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rental/index.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
    .vehicle-type .active{background: rgb(236, 187, 33) !important; border: none !important; font-weight: bold}
</style>
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<style type="text/css">
    ul.navbar-nav.ml-auto {
        float: right;
    }
    .card-header a{ text-decoration: none}
    .vendor-profile {
        text-align: center;
    }

    .vendor-profile .vendor-bio img {
        width: 200px;
        border-radius: 50%;
    }

    .vendor-bio ul {
        list-style-type: none;
        display: inline-flex;
    }

    .vendor-bio ul li a {
        color: blue;
        font-size: 25px
    }

    .vendor-bio ul li a:hover {
        color: blue;
    }      
.request-count { 
            position: relative; 
            top: -20px; 
            left: -34px; 
            color: #ffffff;
            background-color: red;
            border: 1px solid red; 
            border-radius: 50%; 
        } 
</style>
@endsection
@section('content')
<div class="container-fluid" style="padding: 0">
    <img width="100%" height="150px" src="{{asset('images/frontend/slider2.jpg')}}" alt="">
</div>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10">
                <div class="card"  style="border: none;background-color:">
                    <div class="card-header"  style="border: none">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('/')}}" class="btn btn-primary">Back</a>
                            </div>
                            <div class="col-md-6 text-right">
                                @foreach ($clientId as $client)
                                    @if ($client->client_id)
                                        <a href="{{ route('user_nurse_request',$client->client_id) }}" class="btn">
                                            <i class="fa fa-user-plus" style="font-size: 25px"></i> 
                                        </a>
                                    @else
                                        <a href="javascript:void()" class="btn">
                                            <i class="fa fa-user-plus" style="font-size: 25px"></i> 
                                        </a>
                                    @endif
                                @endforeach
                               <span class="badge badge-light request-count">{{$nurseStatusCount}}</span> 
                                <a href="javascript:void()" class="btn">
                                    <i class="fa fa-video-camera" style="font-size: 25px"></i> 
                                </a>
                                <span class="badge badge-light request-count">{{$nurseStatusCount}}</span> 
                               
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
    
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('images/frontend/landing/nurse.jpeg')}}" class="img-circle img-responsive" width="100%">
                            </div>
                            <div class="col-md-9 pl-5">
                                <h3 style="font-weight: bold">{{$user->name}}</h3>
                                <h4 class="text-info">Registered Nurse</h4>
                                <table class="table table-user-information" style="border: none">
                                    <tbody>
                                        <tr>
                                            <td>ID NO</td>
                                            <td>{{$user->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{$user->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>
                                                {{$user->gender}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('scripts')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection