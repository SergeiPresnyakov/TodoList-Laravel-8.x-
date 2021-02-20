@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">  
            <form action="{{ route('create.todo') }}" method="post">
                @csrf
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control input-lg" name="todo" placeholder="Create new ToDo" style="margin: 15px 0">
                </div>
            </form><br>   
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Todo</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                        <th scope="col">Is completed</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                    <tr>
                        <th scope="row">{{ $todo->id }}</th>
                        <td>{{ $todo->todo }}</td>
                        <td><a href="{{ route('delete.todo', ['id' => $todo->id]) }}" class="btn btn-danger btn-lg"> X </a></td>
                        <td><a href="{{ route('update.todo', ['id' => $todo->id]) }}" class="btn btn-warning btn-lg">Update</a></td>
                        @if(!$todo->completed)
                        <td><a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="btn btn-info">Mark as completed</a></td>
                        @else 
                        <td><a href="#" class="btn btn-success">Completed</a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
