@extends('layouts.app')
@section('title')
    Todos List
@endsection

@section('content')
    <h1 class="text-center my-5">Todos App</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                    <div class="card card-default">
                        <div class="card-header">
                            Uncomplete Todos
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            @foreach($datatodos as $todo)
                               

                                @if($todo->completed == "false")
                                    <li class="list-group-item">
                                        {{ $todo->name }}
                                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">
                                        View
                                    </a>
                                     <a href="/todos/{{$todo->id}}/complete" class="btn btn-success btn-sm float-right">Complete</a>
                                    </li>
                            </ul> 
                                @endif
                            @endforeach
                        </div>
                    </div>
                              
                </div>
                      <div class="card card-default">
                        <div class="card-header">
                            Complete Todos
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                            @foreach($datatodos as $todo)
                               

                                @if($todo->completed != "false")
                                    <li class="list-group-item">
                                        {{ $todo->name }}
                                         <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-2">
                                            View
                                        </a>
                                    </li>
                                   
                            </ul> 
                                @endif
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    
@endsection