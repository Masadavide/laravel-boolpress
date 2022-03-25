<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;


class PostController extends Controller
{
    public function index(){
        $posts_api = Post::with('category', 'tags')->get();

        /* foreach ($posts_api as $post) {
            $post['tags'] = $post->tags;
        } */
        /* foreach ($posts_api as $post) {
            $post['category'] = $post->categories;
        } */

        return response()->json($posts_api);
    }
    public function show($slug){

        $post = Post::where("slug", $slug)->with(["category", "tags"])->first();
        
        if( empty($post) ){
            return response()->json(["message" => "post Not Found"], 404);
        }
        return response()->json($post);
    }
}
