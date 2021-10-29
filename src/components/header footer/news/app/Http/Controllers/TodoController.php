<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//important// 

use App\Models\Todo;           // import the model in controller


class TodoController extends Controller
{
    public function index(){
        return view('todos.index');
    }

    public function create(){
        return view('todos.create');
    }

    public function edit(){
        return view('todos.edit');
    }
    public function store(Request $request){
    
    //    dd($request->all());
    Todo::create($request->all());
    return redirect()->back()->with('message', 'Todo Created Successfully');

    }

}
