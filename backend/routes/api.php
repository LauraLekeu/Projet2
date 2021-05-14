<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Notes;
use App\Http\Controllers\Todos;
use App\Http\Controllers\Tags;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 *  API DES USERS
 *  CTRL : Users
 */
Route::resource('users', Users::class)->except(['create', 'edit']);


/**
 *  API DES COURS
 *  CTRL : Courses
 */
Route::resource('courses', Courses::class)->except(['create', 'edit']);


/**
 *  API DES NOTES
 *  CTRL : Notes
 */
Route::resource('notes', Notes::class)->except(['create', 'edit']);


/**
 *  API DES TODOS
 *  CTRL : Todos
 */
Route::resource('todos', Todos::class)->except(['create', 'edit']);


/**
 *  API DES TAGS
 *  CTRL : Tags
 */
Route::resource('tags', Tags::class)->except(['create', 'edit']);
