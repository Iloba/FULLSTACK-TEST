<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(){
        
        $todos = auth()->user()->todos()->orderBy('completed')->paginate(5);
        return view('todos.index')->with(['todos' => $todos]);

    }

    public function create(){

        return view('todos.create');
    }

    public function show(){

    }

    public function edit(Todo $todo){

        return view('todos.edit')->with(['todo'=> $todo]);
    }


    public function update(){

    }

    public function store(Request $request){

        
        $rules = [
            'title' => 'required|max:255'
        ];

        $messages = [
            'title.max' => 'Todo Title Should not be greater than 255 Characters',
            'title.required' => 'You Must Add a Todo TItle'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

        $todo =  auth()->user()->todos()->create($request->all());

        return back()->with('status', 'Todo Created Successfully');

    }

    public function complete(){

    }

    public function incomplete(){

    }

    public function delete(){

    }
}
