@extends('layouts.admin')

@section('content')
    <div class="container">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Registered at</th>
                                <th></th>
                            </tr>
                            @forelse ($nurseRequestLists as $nurse)
                                <tr>
                                    <td>{{ $nurse->name }}</td>
                                    <td>{{ $nurse->email }}</td>
                                    <td>{{ $nurse->created_at }}</td>
                                    <td><a href="{{ route('request.approve', $nurse->id)}}"
                                           class="btn btn-primary btn-sm">Approve</a></td>
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