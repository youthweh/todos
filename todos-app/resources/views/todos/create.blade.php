@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card card-default">
                <div class="card-header">Create new todo</div>
                <div class="card-body">
                    <form action = "">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="name" name="name">

                        </div>
                    </form>
                </div>
           </div>
        </div>  
    </div>
    

@endsection