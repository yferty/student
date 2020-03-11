<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserInfo;
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

Route::middleware(['auth:api'])->group(function () {
    Route::get('/student', 'StudentController@rating');
    Route::post('/student', 'StudentController@create');
    Route::put('/student/{id}', 'StudentController@update');
    Route::delete('/student/{id}', 'StudentController@delete');
});
