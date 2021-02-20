@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="{{ route('todo.update', ['id' => $todo->id]) }}" method="post">
                @csrf
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" name="todo" style="margin: 10px 0" value="{{ $todo->todo }}">
                </div>
                <button class="btn btn-primary form-control" type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection