@extends('todos.layout')

@section('content')

<form method="post" action="{{route('todo.update', $todo->id)}}">
                        @csrf
                        @method('patch')
                            <x-alert/>
                        <div class="row mb-3 mt-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control" value="{{$todo->title}}" name="title" >

                            </div>
                        </div>
                 

                        <div class="row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

                                <a href="{{route('todo.index')}}" class="btn btn-success mt-3 mb-3">back</a>
                            </div>
                        </div>
</form>
@endsection