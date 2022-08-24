@extends('layouts.master')
@section('title') Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-4">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Total Categories <h2>{{ $categories }}</h2></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ url('admin/category') }}" class="small stretched-link">View Details</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-info text-white mb-4">
            <div class="card-body">Total Posts <h2>{{ $posts }}</h2></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ url('admin/posts') }}" class="small stretched-link">View Details</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Total Users <h2>{{ $users }}</h2></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a href="{{ url('admin/users') }}" class="small stretched-link">View Details</a>
            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection