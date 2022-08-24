@extends('layouts.master')
@section('title') Edit Post - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->

<!-- Content Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Edit Post <a href="{{ url('admin/posts') }}" class="btn btn-primary btn-sm float-end">All Posts</a>
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

                <form action="{{ url('admin/posts/'.$post->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Category </label>
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $post->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Post Title</label>
                        <input type="text" name="name" class="form-control" value="{{ $post->name }}" />
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $post->slug }}" />
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="form-control" cols="10" id="my_summernote">{{ $post->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Youtube Iframe Link</label>
                        <input type="text" name="yt_iframe" class="form-control" value="{{ $post->yt_iframe }}" />
                    </div>

                    <h4>SEO Tags</h4>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="{{ $post->meta_title }}" />
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ $post->meta_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keyword" class="form-control" rows="3">{{ $post->meta_keyword }}</textarea>
                    </div>

                    <h4>Status</h4>
                    <div class="mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $post->status == '1' ? 'checked' : '' }} />
                    </div>

                    <button type="submit" class="btn btn-primary">Update Post</button>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection