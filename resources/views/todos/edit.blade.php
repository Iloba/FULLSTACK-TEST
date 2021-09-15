@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Todo</h2>
                    </div>
    
                    <div class="card-body">
                       @include('layouts.messages')        
                        <div class="add-todo-form">
                            <form action="{{route('todos.update', $todo->id)}}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-info text-light"><i class="fas fa-font"></i></span>
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Todo Title" value="{{$todo->title}}">
                                </div>
                                <div class="mb-4">
                                    <textarea name="description" class="form-control" placeholder="Enter Description" cols="20" rows="10">{{$todo->description}}</textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info"> <i class="fas fa-plus-square"></i> Update Todo</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection