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

    public function store(){
       $this->validate(request(),[
           'name' => 'required|min:6|max:12',
           'description' => 'required'
       ]);

       $data = request()->all();

       $todo = new Todo();
       $todo->name = $data['name'];
       $todo->description = $data['description'];
       $todo->completed = false;

       $todo->save();

       session()->flash('success', 'Todo created succesfully');

       return redirect('/todos');
    }

    public function edit($todoId){
        return view('todos.edit')->with('todo',Todo::find($todoId));

    }

    public function update($todoId){
        $this->validate(request(),[
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = Todo::find($todoId);

        $todo->name=$data['name'];
        $todo->description=$data['description'];

        $todo->save();
        session()->flash('success', 'Todo updated succesfully');
        return redirect('/todos');

    }

    public function destroy($todoId){
        $todo = Todo::find($todoId);
        $todo->delete();
        session()->flash('success', 'Todo deleted succesfully');
        return redirect('/todos');

    }
}
