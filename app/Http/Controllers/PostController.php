<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller
{
    public function index()
    {
    	$data = Post::paginate(5);
    	return view('admin.post.index')->with(compact('data'));
    }

    public function create()
    {
        $cate = Category::all();
    	return view('admin.post.create')->with(compact('cate'));
    }

    public function store()
    {
    	
    }

    public function show($id)
    {
    	
    }

    public function edit($id)
    {
    	
    }

    public function update($id)
    {
    	
    }

    public function destroy($id)
    {
    	
    }
}
