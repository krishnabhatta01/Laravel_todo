
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
        <p class="">{{$todo->title}}</p>
      
      @endif
      
    <div class="justify-content-evenly">
    <a href="/todos/edit/{{$todo->id}}">
        <i class="fa-regular fa-pen-to-square text-black"></i>
      </a>

      @if($todo->completed)
      <span onclick="document.getElementById('{{'form-incompleted-'.$todo->id}}').submit()" class="fa-regular fa-square-check cursor-pointer text-primary  "/>
        <form class="display-hidden" id="{{'form-incompleted-'.$todo->id}}" action="{{route('todo.incomplete', $todo->id)}}" method="POST">
          @csrf
          @method('put')
        </form>


      @else
        <span onclick="document.getElementById('{{'form-completed-'.$todo->id}}').submit()" class="fa-regular fa-square-check text-secondary cursor-pointer"/>

        <form class="display-hidden" id="{{'form-completed-'.$todo->id}}" action="{{route('todo.complete', $todo->id)}}" method="POST">
          @csrf
          @method('put')
        </form>
      @endif
      </div>
    </li>
    @endforeach
  </ul>

  <form action="/todos/create"  method="get">
    
    <button class="btn btn-success mt-3 mb-3" type="submit">Create</button>
  </form>
</div>
</div>


@endsection