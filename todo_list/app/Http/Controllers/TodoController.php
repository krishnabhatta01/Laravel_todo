<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo created');

    }
    public function edit(Todo $todo)
    {
        /* dd($todo->title); */
        /* $todo = Todo::find($id); */
        
        return view('todos.edit')->with(['todo' => $todo]);
    }

    public function update(TodoCreateRequest $request , Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message','Title updated!');
    }
}
