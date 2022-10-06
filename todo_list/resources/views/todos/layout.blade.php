@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
        <div class="col-md-8">
            @yield('content')
            </div>
        </div>
    </div>
</div>


@endsection