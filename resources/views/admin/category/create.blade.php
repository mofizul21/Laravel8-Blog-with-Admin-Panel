@extends('layouts.master')
@section('title') Create Category - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-8">
        <div class="card mt-4">
            <div class="card-header">
                <h4>Add Category</h4>
            </div>
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif

                <form action="{{url('admin/add-category')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" id="" cols="10" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>

                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keywords</label>
                        <input type="text" name="meta_keyword" id="" class="form-control">
                    </div>

                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="">Navbar Status</label>
                            <input type="checkbox" name="navbar_status" id="">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" id="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection