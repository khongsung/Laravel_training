<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\category\CreateRequest;
use App\Http\Requests\category\EditCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
    	$data = Category::paginate(5);
    	return view('admin.category.index')->with(compact('data'));
    }

    public function create()
    {
    	return view('admin.category.create');
    }

    public function store(CreateRequest $request)
    {
    	/*dd($request->all());*/
    	$category = $request->all();
        Category::create($category);
        return redirect()->route('category.index');
    }

    public function show($id)
    {
    	
    }

    public function edit($id)
    {
    	$data = Category::find($id);
    	return view('admin.category.edit')->with(compact('data'));
    }

    public function update(EditCategoryRequest $request,$id)
    {
        dd($request->all());
        $category = Category::find($id);
    	$category_update = $request->all();
        $category->update($category_update);
        return redirect()->route('category.index');
    }

    public function destroy(Request $request,$id)
    {
        Category::destroy($id);
        return redirect()->route('category.index');
    }
}
