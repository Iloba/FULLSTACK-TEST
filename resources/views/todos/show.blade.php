@extends('layouts.main')
@section('content')
<div class="container p-4">
    <div class="row">
        <div class="col-md-8 mx-auto pt-5">
            <div class="card p-4 shadow-sm">
                <div class="mb-4">
                    <a class="btn btn-info" href="{{route('todos.index')}}"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1 class="text-center bg-info text-light rounded">{{$todo->title}}</h1>
                <div class="">
                    <p class="text-center">
                        <h5 class="text-center"><i>Below is the Description for this Task</i></h5>
                        <p class="text-center"><b>{{$todo->description}}</b></p>
                    </p>
                </div> <br>
                
            </div>
            
        </div> <br>
    </div>
</div>
@endsection