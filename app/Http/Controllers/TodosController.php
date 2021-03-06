<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos', compact('todos'));
    }

    /**
     * Create new todo
     * 
     * @param Request $request
     */
    public function create(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        return back()
            ->with('success', 'Todo successfuly created.');
    }

    /**
     * Delete todo
     * 
     * @param int $id
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return back()->with('info', 'Todo was deleted.');
    }

    /**
     * Todo edit form
     * 
     * @param int $id
     */
    public function update($id)
    {
        $todo = Todo::find($id);
        return view('update', compact('todo'));
    }

    /**
     * Todo update action
     * 
     * @param Request $request
     * @param int $id
     */
    public function edit(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();

        return redirect()
            ->route('index')
            ->with('success', 'Todo was edited.');
    }

    /**
     * Mark as completed action
     * 
     * @param int $id
     */
    public function markAsComplete($id)
    {
        $todo = Todo::find($id);
        $todo->completed = 1;
        $todo->save();

        return redirect()
            ->route('index')
            ->with('success', 'You finished this task.');
    }
}
