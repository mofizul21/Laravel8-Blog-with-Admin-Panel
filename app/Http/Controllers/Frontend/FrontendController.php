<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $setting = Setting::find(1);
        $all_categories = Category::where('status', '1')->get();
        return view('frontend.index', compact('all_categories', 'setting'));
    }

    public function viewCategorySlug($category_slug){
        $category = Category::where('slug', $category_slug)->where('status', '1')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('status', 1)->paginate(2);
            return view('frontend.post.index', compact('post', 'category'));
        } else {
            return redirect('/');
        }   
    }

    public function viewPost(string $category_slug, string $post_slug){
        // View single Post
        $category = Category::where('slug', $category_slug)->where('status', '1')->first();
        if ($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', 1)->first();
            $latest_posts = Post::where('category_id', $category->id)->where('status', 1)->orderBy('created_at', 'DESC')->get()->take(10);
            return view('frontend.post.view', compact('post', 'latest_posts'));
        } else {
            return redirect('/');
        }  
    }
}
