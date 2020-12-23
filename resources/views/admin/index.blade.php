@extends('layouts.admin')
@section('title', 'Admin | Dashboard')
@section('styles')
    <style>
        
        .request-count { 
            position: relative; 
            top: -20px; 
            left: -25px; 
            color: #ffffff;
            background-color: red;
            border: 1px solid red; 
            border-radius: 50%; 
        } 
    </style>
@endsection
@section('content')
<div class="container"style="padding: 80px">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-3">
                            <h5 class="text-left">Admin Dashboard</h5>
                        </div>
                        <div class="col-md-9 text-right">
                            <a href="{{ route('nurse_request') }}" class="btn btn-primary">Nurse
                                 <i class="fa fa-user-plus pl-2"></i> 
                             </a> 
                            <span class="badge badge-light request-count">{{$nursePendingRequestCount}}</span> 
                            <a href="{{ route('user_request') }}" class="btn text-white" style="background-color: #3b5998">User 
                                <i class="fa fa-user-plus pl-2"></i> 
                            </a> 
                           <span class="badge badge-light request-count">{{$userPendingRequestCount}}</span>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
