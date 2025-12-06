<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/pepole', function(){

    $pepole = [
        ["name" => "mario","skill" => 75, "id" => "1"],
        ["name" => "luigi","skill" => 45, "id" => "2"],
    ];

    return view('pepole.index', ["greeting" => "hello" , "pepole" => $pepole]);
});

Route::get('/pepole/{id}', function($id){

    //fetch record with id
    return view('pepole.show', ["id" => $id]);
});
