<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/menu', 'App\Http\Controllers\MenuController@createMenu');

Route::get('/menu', 'App\Http\Controllers\MenuController@getAllMenu');

Route::get('/menu/{id}', 'App\Http\Controllers\MenuController@getMenuById');

Route::put('/menu/{id}', 'App\Http\Controllers\MenuController@updateMenuById');

Route::delete('/menu/{id}','App\Http\Controllers\MenuController@deleteMenuById');