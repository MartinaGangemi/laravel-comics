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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $comics_list = config('comics_list');
    return view('comics',['comics_list'=>$comics_list] );
})->name('comics');

Route::get('/comics/{id}', function ($id) {
    $comics_list = config('comics_list');
    if($id >= 0 && is_numeric($id) && $id < count($comics_list)){
        $comic= $comics_list[$id];
        return view('comicsDetail', compact('comic'));
    }
    else {
       abort(404);
    }
})->name('comicsDetail');


Route::get('/characters', function () {
    return view('characters');
})->name('characters');