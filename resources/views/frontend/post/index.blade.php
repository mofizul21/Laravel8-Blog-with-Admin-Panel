@extends('layouts.app')

@section('title', $category->meta_title)
@section('meta_description', $category->meta_description)
@section('meta_keyword', $category->meta_keyword)

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="main_title_wrapper category_title_section jl_cat_img_bg">
                <div class="category_image_bg_image"
                    style="background-image: url('{{ asset('uploads/category/'.$category->image) }}');">
                </div>
                <div class="category_image_bg_ov"></div>
                <div class="jl_cat_title_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main_title_col">
                                <div class="jl_cat_mid_title">
                                    <h3 class="categories-title title">{{ $category->name }}</h3>
                                    <p>{{ $category->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-sidebar mt-4" id='content'>
            <div class="jl_wrapper_cat">
                <div id="content_masonry" class="pagination_infinite_style_cat ">
                    
                    @forelse ($post as $item)
                    <div class="box jl_grid_layout1 blog_grid_post_style post-1610 post type-post status-publish format-standard has-post-thumbnail hentry category-gaming tag-design tag-raining tag-technology-2 pb-3">
                        <div class="post_grid_content_wrapper">
                            <div class="image-post-thumb">
                                <a href="#" class="link_image featured-thumbnail"
                                    title="halloween is coming soon what we going to do">
                                    <img width="780" height="450" src="http://jellywp.com/theme/disto/demo/wp-content/uploads/2018/11/dan-7th-752147-unsplash-780x450.jpg"  class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" style="border-radius: 10px">
                                    <div class="background_over_image"></div>
                                </a> 
                                <span class="meta-category-small">
                                    <a  class="post-category-color-text"  style="background:#6b34ba" href="">{{ $category->name }}"</a>
                                </span>
                            </div>
                            <div class="post-entry-content">
                                <div class="post-entry-content-wrapper">
                                    <div class="large_post_content">
                                        <h3 class="image-post-title"><a href="{{ '/tutorial/'.$category->slug . '/' . $item->slug }}"> {{ $item->name }}</a></h3>
                                        <span class="jl_post_meta">
                                            <span  class="jl_author_img_w">
                                                <img src="https://jellywp.com/disto-preview/img/favicon.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo">
                                                <a href="#" title="Posts by Anna Nikova" rel="author">{{ $item->user->name }}</a>
                                            </span>
                                            <span class="post-date">Posted on: <i class="fa fa-clock-o"></i>{{  $item->created_at->format('d-m-y') }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="card card-shadow mt-4">
                        <div class="card-body">
                            <h2>No posts under this category</h2>
                        </div>
                    </div>
                    @endforelse

                </div>

                <nav class="jellywp_pagination">
                    {{ $post->links() }}
                </nav>
            </div>

           

        </div>

        <div class="col-md-4 mt-4">
            <div class="border p-2">
                <h4>Advertising Area</h4>
            </div>
        </div>

    </div>
</div>
@endsection