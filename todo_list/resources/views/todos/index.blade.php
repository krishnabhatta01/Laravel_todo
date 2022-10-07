
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
      
      <div class="">
           @include('todos.Complete-button')

      </div>
        @if($todo->completed)
      <p class=""><del>{{$todo->title}}</del></p>
      @else
        <p class="">{{$todo->title}}</p>
      
      @endif
      
    <div>

      <a href="{{route('todo.edit', $todo->id)}}">
          <span class="fa-regular fa-pen-to-square text-black"/>
      </a>

      
       <span 
       onclick="event.preventDefault();
       if(confirm('Are you sure you wanna delete the task?')){

         document.getElementById('{{'form-deleted-'.$todo->id}}').submit();
       }"
       
       class="fa-solid fa-trash" style="color:rgba(255, 0, 0, 0.685); padding-left:5px; cursor:pointer;
       "/>
      
        <form class="d-hidden" id="{{'form-deleted-'.$todo->id}}" action="{{route('todo.destroy', $todo->id)}}" method="POST">
          @csrf
          @method('delete')
        </form>

      </div>
    </li>
    @endforeach
  </ul>

  <form action="{{route('todo.create')}}"  method="get">
    
    <button class="btn btn-success mt-3 mb-3" type="submit">Create</button>
  </form>
</div>
</div>


@endsection