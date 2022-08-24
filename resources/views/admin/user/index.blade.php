@extends('layouts.master')
@section('title') Users - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>All Users <a href="{{url('admin/posts/create')}}" class="btn btn-primary btn-sm float-end">Add User</a></h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role_as == 1 ? 'Admin' : 'User' }}</td>
                            <td>
                                <a href="{{ url('admin/users/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                                <a href="{{ url('admin/users/'.$item->id) }}" target="_blank" class="btn btn-danger">Delete</a>
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