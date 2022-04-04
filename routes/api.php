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

Route::group([
    'namespace' => 'App\Http\Controllers'
],function(){
    Route::group([
        'prefix' => 'moradores',
    ],function(){
        Route::get('/{id_morador?}', 'MoradoresController@index');
    });

    Route::group([
        'prefix' => 'vaga-morador',
    ],function(){
        Route::get('/indica-vaga', 'VagasMoradorController@indicaVaga');
    });
});