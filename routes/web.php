<?php

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