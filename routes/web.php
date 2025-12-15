<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are for HTML pages (Blade views). You can leave this empty
| if your frontend is entirely separate (e.g., React).
|
*/

// Page d'accueil simple (optionnelle)
Route::get('/', function () {
    return 'Backend API for Search Engine — No UI here.';
});
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/register',[AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login',[AuthController::class, 'showLogin'])->name('show.login');

Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::get('/users', function (){

    $users = [
        ["name" => "mario","skill" => 75, "id" => "1"],
        ["name" => "luigi","skill" => 45, "id" => "2"],
    ];

    return view('users.index', ["greeting" => "hello" , "users" => $users]);
});

Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/{id}', function ($id){

    //fetch record with id
    return view('users.show', ["id" => $id]);
});
