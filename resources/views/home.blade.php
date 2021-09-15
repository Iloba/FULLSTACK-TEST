@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    <h3>Welcome, {{auth()->user()->name}}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('todos.create')}}" class="btn btn-info float-right"> <i class="fas fa-plus-square"></i> Add Todo</a>
                    <a href="{{route('todos.index')}}" class="btn btn-success float-left"> <i class="fas fa-th-list"></i> My  Todos</a>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
