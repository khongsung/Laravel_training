<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\user\createUserRequest;

class UserController extends Controller
{
    public function index() {
    	$title = "This is title";
    	$name = "Khong van sung";
    	$object = [
    		'html', 'css', 'php'
    	];

    	return view('user.index')->with('title', $title)
    	->with('name', $name)
    	->with('object', $object);
    }

    public function create() {
    	$users = [
    		[
    			'name' => 'sung',
    			'gmail' => 'sung@gmail.com'
    		],

    		[
    			'name' => 'Vinh',
    			'gmail' => 'vinh@gmail.com'
    		],
    	];

    	$post = 'title is: Don\'t make this mistake your watermelon (msn.com)';

    	return view('user.create')->with(compact('users', 'post'));
    }

    public function store(createUserRequest $request) {
        return $request->all();
    }

    public function edit($id) {
    	return view('user.edit')->with(compact('id'));
    }
}
