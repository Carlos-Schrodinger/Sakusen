<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\test;
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

/**php */
Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload', function () {
    return view('welcome');
});

Route::get('/profile/{id}', function ($id) {
    return view('posts.view', ['id' => $id,
    'data' => [
        ['username' => 'John Kennedy', 'comment' => 'Hi i am the president lol'],
        ['username' => 'Javier Gutierrez', 'comment' => 'Biologia? SI!!!!'],
        ['username' => 'Andrea XXtdl', 'comment' => 'Manda nudes'],
        ['username' => 'Hfetg', 'comment' => 'we do a lil tr0ll'],
        ['username' => 'Shigetorum', 'comment' => 'Why is everyone so weird today?!'],
        ['username' => 'ceegee1337', 'comment' => ' Come back thx thx'],
    ]]);
});
