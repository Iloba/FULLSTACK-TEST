@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">My Todos</h2>
            <div class="card">
                
                <div class="card-header">
   
                   
                    <a href="{{route('todos.create')}}" class="btn btn-info btn-sm float-right"> <i class="fas fa-plus-square"></i> Add Todo</a>
                
                </div>

                <div class="card-body">
                    @include('layouts.messages')    
                    <ul>
                        @if (count($todos) > 0)
                                @foreach ($todos as $todo)
                                <li class="px-2 mb-3" style="display: flex; justify-content: space-between;" id="mobile-list">
                                    @include('todos.completedButton')
                                    @if ($todo->completed)
                                        <p style="text-decoration: line-through;">{{$todo->title}}</p> 
                                    @else
                                        <a href="{{route('todos.show', $todo->id)}}" class="cursor-pointer">{{$todo->title}}</a> 
                                       
                                    @endif
                                    <div id="buttons">
                                        <a href="{{route('todos.edit', $todo->id)}}" class=" text-light btn btn-info btn-sm ml-2">
                                            <i class="fas fa-edit"></i></a>
    
    
                                            <a onclick="event.preventDefault();
                                                if(confirm('Do you really want to Delete this Todo?')){
                                                    document.getElementById('form-delete-{{$todo->id}}').submit();
                                                }";
                                                
                                                href="{{route('todos.delete', $todo->id)}}" class=" text-light btn btn-danger btn-sm ml-3">
                                                <i class="fas fa-trash"></i>
                                        </a>
    
                                        <form style="display: none;" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todos.delete', $todo-> id)}}">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        
                                    </div>
                                    
                                </li>
                                <hr>
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