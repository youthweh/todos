@extends('layouts.app')

@section('title')
    Single todo : {{$todopage->name}}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-5">
             {{$todopage->name}}
            </h1>
            <div class="card card-default">
                <div class="card-header">
                    Details
                </div>

                <div class="card-body">
                    {{$todopage->description}}
                </div>
             </div>
                <a href="/todos/{{$todopage->id}}/edit" class="btn btn-info btn-sm my-2">Edit</a>
                  <a href="/todos/{{$todopage->id}}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
        </div>
      </div>

@endsection