<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(Request $request){
    
        $category = $request->query('category');
        // dump($category);
        $postList = Post::with('category')
        ->with('tags')
        ->with('user:id,name');
        // ->get();

        if($category){
        $postList = $postList->where('category_id',$category)->get();
        }else{
            $postList = $postList->get();
        }

        $postList->each(function($post){
            $post->thumb = "/storage/" . $post->thumb;
        });
        return response()->json($postList);

    }
    function show($id) {
        $post = Post::where('id',$id)
        ->with('category')
        ->with('tags')
        ->with('user:id,name,email')
        ->first();

        $post->thumb = "/storage/" . $post->thumb;
        return $post;
    }
}
