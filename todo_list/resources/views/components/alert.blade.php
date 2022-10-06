<div>
    @if(session()->has('message'))
    <div class="alert alert-success">{{session()->get('message')}}</div>    
    {{$slot}}
    @elseif(session()->has('error'))
    <div class="alert alert-danger">{{session()->get('error')}}</div>
    {{$slot}}
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>