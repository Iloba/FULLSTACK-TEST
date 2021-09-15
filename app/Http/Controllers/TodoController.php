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

    public function show(Todo $todo){
        
        return view('todos.show')->with(['todo' => $todo]);
    }

    public function edit(Todo $todo){

        return view('todos.edit')->with(['todo'=> $todo]);
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

        return redirect()->route('todos.index')->with('status', 'Todo Created Successfully');

    }

    public function update(Request $request, Todo $todo){

        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ];


        $message = [
            'title.max' => 'Todo Title Should not be greater than 255 Characters',
            'title.required' => 'You Must Add a Todo TItle'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }

          $todo = Todo::find($todo->id);
          $todo->title = $request->title;
          $todo->description = $request->description;
          $todo->save();

          return redirect(route('todos.index'))->with('status', 'Todo Update Successful');
    }


    public function complete(){

    }

    public function incomplete(){

    }

    public function delete(Todo $todo){

        $todo->delete();

        return redirect(route('todos.index'))->with('status', 'Todo Deleted Successfully');
    }
}
