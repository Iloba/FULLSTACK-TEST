@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="">Create Todo</h2>
                    </div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                
                        
                        <div class="add-todo-form">
                            <form action="{{route('todos.store')}}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-tasks"></i></span>
                                    </div>
                                    <input type="text" name="title" class="form-control" placeholder="Todo Title">
                                </div>
                                <div class="mb-4">
                                    <textarea name="description" class="form-control" placeholder="Enter Description" cols="20" rows="10"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-info"> <i class="fas fa-plus-square"></i> Add Todo</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection