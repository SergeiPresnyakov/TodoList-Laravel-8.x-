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

        return back();
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

        return back();
    }
}
