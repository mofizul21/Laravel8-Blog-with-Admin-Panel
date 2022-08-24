@extends('layouts.master')
@section('title') Add Post - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Create Post <a href="{{ url('admin/posts') }}" class="btn btn-primary btn-sm float-end">All Posts</a>
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

                <form action="{{ url('admin/posts') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="">Category </label> 
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Title</label>
                        <input type="text" name="name" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        {{-- G Chrome Fake Filler extension creating problem to storing data. So write text manually when creating a post.  --}}
                        <textarea name="description" class="form-control" rows="8" id="my_summernote"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control" />
                    </div>

                    <h4>SEO Tags</h4>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keyword" class="form-control" rows="3"></textarea>
                    </div>

                    <h4>Status</h4>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" />
                    </div>

                    <button type="submit" class="btn btn-primary">Save Post</button>
                    

                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection