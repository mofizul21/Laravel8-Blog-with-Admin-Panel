@extends('layouts.master')
@section('title') Categories - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categories</h1>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>View Categories <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a></h4>
            </div>
            <div class="card-body">

                @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Navbar Status</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $data)                            
                        <tr>
                            <td>{{$data['id']}}</td>
                            <td>{{$data->name}}</td>
                            <td><img src="{{ asset('uploads/category/'.$data->image) }}" alt="{{$data->name}}" height="50"></td>
                            <td>{{ $data['navbar_status'] == '1' ? 'Shown' : 'Hidden' }}</td>
                            <td>{{ $data['status'] == '1' ? 'Shown' : 'Hidden' }}</td>
                            <td>
                                <a href="{{url('admin/edit-category/'.$data->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{url('admin/delete-category/'.$data->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection