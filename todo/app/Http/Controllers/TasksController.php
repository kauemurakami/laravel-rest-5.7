<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){
        return Task::all();
    }

    public function store(Request $request){
        
        $task = Task::create([
            'nome'=>$request->input('nome'),
            'complete'=>$request->input('complete')
        ]);

        return $task;
    }

    public function showTask(Task $task){
        return $task;
    }

    public function remove(Task $task){
        $task->delete();
        return "apagado";
    }

    public function update(Request $request, Task $task){

        $task->nome = $request->input('nome');
        $task->save();
        return $task;
    }
}
