@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-left">Users List to Approve</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/admin/dashboard" class=" btn btn-info">Back</a>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">

                        @if (session()->has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table">
                            <tr>
                                <th>Request Id</th>
                                <th>Client ID</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            @forelse ($userNurseRequests as $userNurseRequest)
                                <tr>
                                    <td>{{ $userNurseRequest->id }}</td>
                                    <td>{{ $userNurseRequest->client_id }}</td>
                                    <td>{{ $userNurseRequest->status }}</td>
                                    <td><a href="{{ route('nurse_request_accept', $userNurseRequest->id)}}"
                                           class="btn btn-primary btn-sm">Accept</a></td>
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