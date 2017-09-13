<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\user\CreateUserRequest;
use App\User;

class UserController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $data = User::paginate(5);
    	return view('admin.user.index')->with(compact('data'));
    }

    public function store(CreateUserRequest $request) 
    {  
        /*dd($request->all());*/
        $user = $request->all();
        User::create($user);
        return redirect()->route('user.index');
    }

    public function create() 
    {
    	return view('admin.user.create');
    }

    public function show() 
    {
        
    }

    public function update(Request $request, $id) 
    {
        /*dd($requests->all());*/
        $user = User::find($id);
        $user_update = $request->all();
        $user->update($user_update);
        return redirect()->route('user.index');
    }

    public function destroy($id) 
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }

    public function edit($id) 
    {
        $data = User::find($id);
    	return view('admin.user.edit')->with(compact('data'));
    }
}
