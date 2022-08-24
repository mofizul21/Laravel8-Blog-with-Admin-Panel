<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Check the user is loggedin
        if(Auth::check()){
            // Validation
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string',
            ]);
            if($validator->fails()){
                $this->setErrorMessage('Comment area is mandatory');
                return redirect()->back();
            }

            // Check the post slug and post-status is right
            $post = Post::where('slug', $request->post_slug)->where('status', '1')->first();
            if($post){
                Comment::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body,
                ]);
                $this->setSuccessMessage('Comment posted successfully');
                return redirect()->back();
            } else {
                $this->setErrorMessage('No such post found');
                return redirect()->back();
            }
        } else {
            $this->setErrorMessage('At first, you need to login');
            return redirect('login');
        }
    }

    public function deleteComment(Request $request){
        if (Auth::check()) { 
            $comment = Comment::where('id', $request->comment_id)->where('user_id', Auth::user()->id)->first();

            if($comment){
                $comment->delete();

                return response()->json([
                    'status'    =>  200,
                    'message'   => 'Comment delete successfully'
                ]);
            } else {
                return response()->json([
                    'status'    =>  501,
                    'message'   => 'Comment not found'
                ]);
            }
            
        } else {
            return response()->json([
                'status'    =>  401,
                'message'   => 'Login to delete this comment'
            ]);
        }
    }
}
