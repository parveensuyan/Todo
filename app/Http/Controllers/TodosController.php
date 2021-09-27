<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    function index()
    {
        return view('todos.index')->with('todos', Todo::all());
    }
    function show($todoId)
    {
        return view('todos.show')->with('todos', Todo::find($todoId));
    }
    function create()
    {
        return view('todos.create');
    }
    function store()
    {
        $this->validate(request(), [
            "name"        => "required|min:4|max:12",
            "description" =>  "required"
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success', 'Todo created successfully');

        return redirect('/todos');
    }
    function edit(Todo $todo)
    {

        return view('todos.edit')->with('todos', $todo);
    }
    function update(Todo $todo)
    {
        $this->validate(request(), [
            "name" => 'required|min:4|max:12',
            "description" => "required"
        ]);
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }
    function destory(Todo $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo deleted successfully');

        return redirect('/todos');
    }
    function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();

        session()->flash('success', 'Todo completed successfully');

        return redirect('/todos');
    }
}
