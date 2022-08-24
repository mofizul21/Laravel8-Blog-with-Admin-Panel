@extends('layouts.master')
@section('title') Posts - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>All Posts <a href="{{url('admin/posts/create')}}" class="btn btn-primary btn-sm float-end">Add Post</a></h4>
            </div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $item) 
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ Str::limit($item->name, 40, '...') }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->status == 1 ? 'Shown' : 'Hidden' }}</td>
                            <td>
                            <a href="{{ url('admin/posts/'.$item->id.'/edit') }}" class="btn btn-success">Edit</a>
                            <a href="{{ url('admin/posts/'.$item->id) }}" target="_blank" class="btn btn-primary">View</a>

                            <form action="{{ url('admin/posts/'.$item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">Delete</button>
                            </form>   
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