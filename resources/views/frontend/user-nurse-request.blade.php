@extends('layouts.app')
@section('title','eNurse | Nurse Request')
@section('styles')
    <style>
        a{
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-left">Client to get Approval</h5>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="/user" class=" btn btn-info">Back</a>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>NID</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            @forelse ($userNurseRequestDetails as $client)
                                <tr>
                                    <td>{{ $client->request_id }}</td>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->gender }}</td>
                                    <td>{{ $client->nid }}</td>
                                    <td>{{ $client->status }}</td>
                                    <td><a href="{{ route('nurse_request_accept', $client->request_id)}}"
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