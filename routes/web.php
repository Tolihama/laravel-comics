<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Comics home
Route::get('/', function () {
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');

// Comic detail page
Route::get('/comic/{id}', function($id) {
    $comics = config('comics');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
    } else {
        abort(404);
    }

    return view('comic-details', compact('comic'));
})->name('comic-details');
