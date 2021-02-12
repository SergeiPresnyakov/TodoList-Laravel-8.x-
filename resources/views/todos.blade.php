<h1>Todos</h1>

<ol>
    @foreach($todos as $todo)
        <li>{{ $todo->todo }}</li><hr>
    @endforeach
</ol>