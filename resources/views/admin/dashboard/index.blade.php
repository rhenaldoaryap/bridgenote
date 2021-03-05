@extends('layouts.admin')

@section('title', 'Dashboard Page')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Total list user</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
        </div>
    </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $users }}</h3>
                        <p>Total users</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users</h3>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($totalUser as $user)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    showing
                    {{ $totalUser->firstItem() }}
                    to
                    {{ $totalUser->lastItem() }}
                    of
                    {{ $totalUser->total() }}
                    entries
                </div>
                <div class="card-footer d-flex justify-content-center">
                    {{ $totalUser->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection