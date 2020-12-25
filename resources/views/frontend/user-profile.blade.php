@extends('layouts.app')
@section('styles')
<style>
    ul.navbar-nav.ml-auto {
        float: right;
    }
    .card-header a{ text-decoration: none}
</style>

<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
@endsection
@section('content')
<div class="container-fluid" style="padding: 0">
    <img width="100%" height="150px" src="{{asset('images/frontend/slider2.jpg')}}" alt="">
</div>
<div class="container" style="padding: 50px 0px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-6">
                            <h5>Profile</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{url('/')}}" class="btn btn-primary">Back</a>
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
                            <img alt="User Pic" src="/images/user.jpg" class="img-circle img-responsive" width="100%">
                            <h5 class="text-primary text-center pt-1">{{$user->name}}</h5>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>User Id</td>
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
                                    <tr>
                                        <td>Approve Date</td>
                                        <td>{{$user->created_at}}</td>
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