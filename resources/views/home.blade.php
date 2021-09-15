@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="" class="btn btn-info float-right"> <i class="fas fa-plus-square"></i> Add Todo</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    list of todos
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
