@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">  
            <form action="{{ route('create.todo') }}" method="post">
                @csrf
                <input type="text" class="form-control input-lg" name="todo" placeholder="Create new ToDo">
            </form><br>   
        </div>
    </div>
</div>

<ol>
    @foreach($todos as $todo)
        <li>{{ $todo->todo }}
            <a href="{{ route('delete.todo', ['id' => $todo->id]) }}" class="btn btn-danger"> X </a>
        </li>
        <hr>
    @endforeach
</ol>
@endsection
