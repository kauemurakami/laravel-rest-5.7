<?php

use Illuminate\Http\Request;

Route::get("tasks", "TasksController@index");
Route::get("tasks/{task}", "TasksController@showTask");
Route::patch("tasks/{task}", "TasksController@update");
Route::delete("tasks/{task}", "TasksController@remove");
Route::post("tasks", "TasksController@store");