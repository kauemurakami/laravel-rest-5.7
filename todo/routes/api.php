<?php

use Illuminate\Http\Request;

Route::get("tasks", function(){

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
});