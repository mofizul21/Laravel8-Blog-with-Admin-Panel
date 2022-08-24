@extends('layouts.master')
@section('title') Edit Category - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-8">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Edit Category</h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{ url('admin/update-category/'.$category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{ $category->slug }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" cols="10" rows="5" class="form-control">{{ $category->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <img src="{{ asset('uploads/category/'.$category->image) }}" alt="{{$category->name}}" height="50">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" value="{{ $category->meta_description }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keyword" value="{{ $category->meta_keyword }}" class="form-control">
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">Navbar Status</label>
                            <input type="checkbox" name="navbar_status" {{ $category->navbar_status == '1' ? 'checked' : '' }}>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }}>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection