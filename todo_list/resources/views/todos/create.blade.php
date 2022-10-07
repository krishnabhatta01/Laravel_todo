@extends('todos.layout')

@section('content')

<form method="POST" action="{{route('todo.store')}}">
                        @csrf
                            <x-alert/>
                        <div class="row mb-3 mt-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control" name="title" >

                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>

                                <a href="{{route('todo.index')}}" class="btn btn-success mt-3 mb-3">back</a>
                            </div>
                        </div>
</form>


@endsection