<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('name')->get();
        return response()->json($categories);
    }
    
    public function show($id){
        $data = Category::where('id', $id)->with(['posts','posts.category','posts.user:id,name','posts.tags'])->first();
        return response()->json($data);
    }
}
