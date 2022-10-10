<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $todos = auth()->user()->todos->sortBy('completed');
        
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoCreateRequest $request)
    {

        auth()->user()->todos()->create($request->all());
        /* Todo::create($request->all()); */
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

    public function complete(Todo $todo)
    {
        $todo->update(['completed'=> True]);
        return redirect()->back()->with('message','Task completed!');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task marked as incomplete!');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message', 'Task deleted!');
        
    }
}
