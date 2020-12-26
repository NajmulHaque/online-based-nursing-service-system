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
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card"  style="border: none;background-color:">
                <div class="card-header" style="border: none">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-left">Users List to Approve</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('user.index')}}" class=" btn btn-info">Back</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">

                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table"  style="border: none">
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Meet Link</th>
                            <th></th>
                        </tr>
                        @forelse ($userVideoRequestDetails as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="{{ $user->meet_link }}" target="_blank">{{ $user->meet_link }}</a></td>
                                {{-- <td><a href="{{ route('request.approve', $user->id)}}"
                                       class="btn btn-primary btn-sm">Approve</a></td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No users found.</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection