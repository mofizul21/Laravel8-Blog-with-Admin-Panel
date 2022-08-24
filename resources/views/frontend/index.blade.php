@extends('layouts.app')

@section( "title", "$setting->meta_title" )
@section("meta_description", "$setting->meta_description")
@section("meta_keyword", "$setting->meta_keyword")

@section('content')
<div class="bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel">

                    @foreach ($all_categories as $item)
                    <div class="item p-4">
                        <a href="{{ url('tutorial/'.$item->slug) }}">
                            <div class="card">
                                <img src="{{ asset('uploads/category/'.$item->image) }}" alt="">
                                <div class="card-body">
                                    {{ $item->name }}
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @php
        $posts = App\Models\Post::where('status', '1')->orderBy('created_at', 'DESC')->get()->take(10);
        @endphp

        @foreach ($posts as $item)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><a href="{{ url( 'tutorial/'.$item->category->slug.'/'.$item->slug ) }}">{{ $item->name }}</a></h4>
                </div>
                <div class="card-body">
                    {!! $item->description !!}
                    {{-- {!! Str::limit($item->description, 35, '...') !!} --}}
                </div>
            </div>
        </div>
        @endforeach        

    </div>
</div>

@endsection