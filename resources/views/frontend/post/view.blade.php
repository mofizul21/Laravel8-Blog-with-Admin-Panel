@extends('layouts.app')

@section('title', $post->meta_title)
@section('meta_description', $post->meta_description)
@section('meta_keyword', $post->meta_keyword)

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-12">
            <div class="main_title_wrapper category_title_section jl_cat_img_bg">
                <div class="category_image_bg_image"
                    style="background-image: url('http://jellywp.com/theme/disto/demo/wp-content/uploads/2018/11/icons8-team-554108-unsplash-1920x982.jpg');">
                </div>
                <div class="category_image_bg_ov"></div>
                <div class="jl_cat_title_wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 main_title_col">
                                <div class="jl_cat_mid_title">
                                    <h3 class="categories-title title">{{ $post->name }}</h3>
                                    <p><b>Posted at:</b> {{ $post->created_at->format('d-m-y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-sidebar mt-4">
            <div class="jl_wrapper_cat">
                <div id="content_masonry" class="pagination_infinite_style_cat ">
                    <p><b>Category:</b> {{ $post->category->name }}, <b>Atuhor:</b> {{ $post->user->name }}</p>
                    {!! $post->description !!}
                </div>
            </div>

            <h5>Comments</h5>
            <div class="comment-area mt-4">
                {{-- @if (session('message'))
                <h6 class="alert alert-warning mb--3">{{ session('message') }}</h6>
                @endif --}}

                @include('layouts.inc.message')

                <div class="card card-body">
                    <h6 class="card-title">Leave a comment</h6>

                    <form action="{{ url('comments') }}" method="post">
                        @csrf
                        <input type="hidden" name="post_slug" value="{{ $post->slug }}">
                        <textarea name="comment_body" class="form-control" cols="10" rows="5"></textarea>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>

                </div>

                @forelse ($post->comments as $comment)
                <div class="comment_container card card-body mt-3">
                    <div class="detail_area">
                        <h6 class="mb-1 user-name">
                            @if ($comment->user)
                            {{ $comment->user->name }}
                            @endif
                            <small class="ms-3 text-center">Commented on: {!! $comment->created_at->format('d-m-Y')
                                !!}</small>
                        </h6>
                        <p class="user-comment mb-1">
                            {!! $comment->comment_body !!}
                        </p>
                    </div>
                    @if (Auth::check() && Auth::id() == $comment->user_id)
                    <div>
                        <a href="" class="btn btn-primary">Edit</a>
                        <button type="button" value="{{ $comment->id }}"
                            class="btn btn-danger deleteComment">Delete</button>
                    </div>
                    @endif

                </div>
                @empty
                <div class="card card-body mt-2">
                    <h6>No comments</h6>
                </div>
                @endforelse


            </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="border p-2">
                <h4>Advertising Area</h4>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h4>Latest Post</h4>
                </div>
                <div class="card-body">
                    @foreach ($latest_posts as $item)
                    <a href="{{ url('tutorial/'.$item->category->slug.'/'.$item->slug) }}" class="text-decoration-none">
                        <h6>{{ $item->name }}</h6>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click', '.deleteComment', function(){
                if(confirm('Are you sure?')){
                    var thisClicked = $(this);
                    var comment_id = thisClicked.val();
                    // alert(comment_id);
                    // return;
                    $.ajax({
                        type: 'POST',
                        url: '/delete-comment',
                        data: {
                            'comment_id': comment_id,
                        },
                        success: function(res){
                            if(res.status == 200){
                                thisClicked.closest('.comment_container').remove();
                                alert(res.message);
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }
            });
        });
</script>
@endsection