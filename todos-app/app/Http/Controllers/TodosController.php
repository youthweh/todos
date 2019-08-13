<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        //fetch all todos from database
        // display then in the todos.index page

        return view('todos.index')->with('datatodos',Todo::all());
    }

    public function show($todoId){

        return view('todos.show')->with('todopage',Todo::find($todoId));
    }

    public function create(){
        return view('todos.create');
    }
}
