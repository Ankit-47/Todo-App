<?php

namespace App\Http\Controllers; // Corrected namespace to App\Http\Controllers

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all(); // ✅ Changed 'todos' to 'Todo'
        $data = compact('todos');
        return view("welcome")->with($data);
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'duedate' => 'required'
        ]);

        $todo = new Todo; // ✅ Changed 'todos' to 'Todo'
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->duedate = $request['duedate'];
        $todo->save();

        return redirect(route("todo.home"));
    }

    public function delete($id){
        Todo::find($id)->delete(); // ✅ Changed 'todos' to 'Todo'
        return redirect(route("todo.home"));
    }

    public function edit($id){
        $todo = Todo::find($id); // ✅ Changed 'todos' to 'Todo'
        $data = compact('todo');
        return view("update")->with($data);
    }

    public function updateData(Request $request){
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'duedate' => 'required'
        ]);

        $id = $request['id'];
        $todo = Todo::find($id); // ✅ Changed 'todos' to 'Todo'
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->duedate = $request['duedate'];
        $todo->save();

        return redirect(route("todo.home"));
    }
}
