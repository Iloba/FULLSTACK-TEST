@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   <h2>My Todos</h2>
                    
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="" >
                        @if (count($todos) > 0)
                                @foreach ($todos as $todo)
                                <li class="px-2 mb-2" style="display: flex; justify-content: space-between;">
                                    {{-- @include('todos.completeButton') --}}
                                    @if ($todo->completed)
                                        <p style="text-decoration: line-through;" class="">{{$todo->title}}</p> 
    
                                    @else
                                        <a href="{{route('todos.show', $todo->id)}}" class="cursor-pointer">{{$todo->title}}</a> 
                                    @endif
                                    <div>
                                        <a href="{{'/todos/'.$todo->id.'/edit'}}" class=" text-light btn btn-info ml-2">
                                            <i class="fas fa-edit"></i></a>
    
    
                                            <a onclick="event.preventDefault();
                                                if(confirm('Do you really want to Delete this Todo?')){
                                                    document.getElementById('form-delete-{{$todo->id}}').submit();
                                                }";
                                                
                                                href="{{'/todos/'.$todo->id.'/delete'}}" class=" text-light btn btn-danger ml-2">
                                                <i class="fas fa-trash"></i>
                                        </a>
    
                                            <form style="display: none;" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todos.delete', $todo-> id)}}">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        
                                    </div>
                                    
                                </li>
                                <br>
                            @endforeach
                            
                            @else
    
                            <p><b>You Do Not Have Any Registered Todo Please Add Some</b></p>
    
                        @endif
                      
                         {{$todos->links()}}
                    </ul>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection