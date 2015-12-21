<?php

Route::get("/student", 
	"Rofil\Student\Http\Controllers\DefaultController@index");
Route::get("/student/{id}", 
    "Rofil\Student\Http\Controllers\DefaultController@index");