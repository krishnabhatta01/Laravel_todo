
@extends('todos.layout')

@section('content')

<div class=" row justify-content-center">
<div class="card text-center" style="width: 18rem;">
  <div class="card-header">
    All Todos
  </div>
    <x-alert/>
  <ul class="list-group list-group-flush">
    @foreach($todos as $todo )
    <li class="list-group-item d-flex justify-content-between">
      
        @if($todo->completed)
      <p class=""><del>{{$todo->title}}</del></p>
      @else
      
      @endif
      
    <div class="justify-content-evenly">
    <a href="/todos/edit/{{$todo->id}}">
        <i class="fa-regular fa-pen-to-square text-black"></i>
      </a>
      @if($todo->completed)
      <span class="fa-regular fa-square-check cursor-pointer text-primary"/>
      @else
        <span class="fa-regular fa-square-check text-secondary cursor-pointer"/>
      @endif
      </div>
    </li>
    @endforeach
  </ul>

  <form action="/todos/create" method="get">
    
    <button class="btn btn-success mt-3 mb-3" type="submit">Create</button>
  </form>
</div>
</div>


@endsection