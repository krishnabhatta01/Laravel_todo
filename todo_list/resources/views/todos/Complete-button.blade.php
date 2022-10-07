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