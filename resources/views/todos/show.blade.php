@extends('layouts.main')
@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-8 mx-auto pt-5">
            <div class="card p-4 shadow-sm">
                <div class="mb-4">
                    <a class="btn btn-info" href="{{route('todos.index')}}"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1 class="text-center bg-info text-light rounded p-3">{{$todo->title}}</h1>
                <div class="">
                    <p class="text-center">
                        <h5 class="text-center"><i>Below is the Description for this Task</i></h5>
                        <p class="text-center"><b>{{$todo->description}}</b></p>
                    </p>
                    @if ($todo->completed)
                        <p class="text-center text-success">Todo Completed</p>
                     @else
                        <p class="text-center text-danger">Todo Incomplete</p>
                    @endif
                </div> <br>
            </div>
            
        </div> 
    </div>
</div>
@endsection