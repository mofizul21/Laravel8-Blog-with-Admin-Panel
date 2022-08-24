@extends('layouts.master')
@section('title') Settings - Admin Dashboard @endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings</h1>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-md-8">

        @include('layouts.inc.message')

        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3"> 
                        <label>Website Name</label>
                        <input type="text" name="website_name" @if ($setting) value="{{ $setting->website_name }}" @endif class="form-control" />
                    </div> 
                    <div class="mb-3">
                        <label>Website Logo</label>
                        @if ($setting)<img src=" {{ asset('uploads/settings/'.$setting->logo) }} " alt="" height="50">@endif
                        <input type="file" name="website_logo" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Website Favicon</label>
                        @if ($setting) <img src="{{ asset('uploads/settings/'.$setting->favicon) }}" alt="" height="50"> @endif
                        <input type="file" name="website_favicon" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <label>Description</label> 
                        <textarea name="description" class="form-control" rows="3">@if ($setting) {{ $setting->description }} @endif</textarea>
                    </div>

                    <h4>SEO - Meta Tags</h4>
                    <div class="mb-3">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" @if ($setting) value="{{ $setting->meta_title }}" @endif />
                    </div>
                    <div class="mb-3">
                        <label>Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3">@if ($setting) {{ $setting->meta_keyword }} @endif</textarea>
                    </div>
                    <div class="mb-3">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">@if ($setting) {{ $setting->meta_description }} @endif</textarea>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Content Row -->
@endsection