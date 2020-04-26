<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index(){

    $tasks = [
        [
            "id"=>1,
            "nome"=>"Estudar php",
            "complete"=>false
        ],
        [
            "id"=>2,
            "nome"=>"Estudar JS",
            "complete"=>true
        ],
    ];

    return $tasks;
    }

    public function storage(){
        return "post storage";
    }
}
