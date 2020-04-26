<?php

use Illuminate\Http\Request;

Route::get("tasks", "TasksController@index");
Route::get("tasks/{task}", "TasksController@showTask");
Route::post("tasks", "TasksController@store");