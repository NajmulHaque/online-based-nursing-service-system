@extends('layouts.app')
@section('styles')
<style>
    ul.navbar-nav.ml-auto {
        float: right;
    }
    .card-header a{ text-decoration: none}
    .approval-text p{
        font-size: 16px;
        color: red;
    }
</style>

<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container" style="padding: 10% 0%">
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h4>Waiting for Approval</h4></div>

                <div class="card-body approval-text">
                    <p>Your account is waiting for our administrator approval.</p>
                    <p>Please check back later.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection