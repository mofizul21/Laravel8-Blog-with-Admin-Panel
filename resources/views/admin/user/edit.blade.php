@extends('layouts.master')
@section('title') Edit User - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit User <a href="{{ url('admin/users') }}" class="btn btn-primary btn-sm float-right">All Users</a>
                </h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{ url('admin/users/'.$user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}" readonly />
                    </div>
                    <div class="mb-3">
                        <label for="">Created</label>
                        <input type="date" name="created_at" class="form-control" value="{{ $user->created_at->format('Y-m-d') }}" readonly />
                    </div>

                    <h4>Status</h4>
                    <div class="mb-3">
                        <label for="">Role</label>
                        <select name="role_as" class="form-control">
                            <option value="">-- Select --</option>
                            <option value="0" {{ $user->role_as == '0' ? 'selected' : '' }}>User</option>
                            <option value="1" {{ $user->role_as == '1' ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $user->role_as == '2' ? 'selected' : '' }}>Blogger</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update User</button>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection