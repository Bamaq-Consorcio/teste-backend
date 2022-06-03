<?php

use Illuminate\Support\Facades\Route;
use App\Exceptions\CSV;
use App\Http\Controllers\Home;
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

Route::get('/', [Home::class, 'index']);


Route::get('/apartamentos', function () {
    $dados = CSV::readCSV('./../tables/apartamentos.csv', true, ',');
    echo '<pre>';
    print_r($dados);
    echo '</pre>';
});

Route::get('/moradores', function () {
    $dados = CSV::readCSV('./../tables/moradores.csv', true, ',');
    echo '<pre>';
    print_r($dados);
    echo '</pre>';
});

Route::get('/veiculos', function () {
    $dados = CSV::readCSV('./../tables/veiculos.csv', true, ',');
    echo '<pre>';
    print_r($dados);
    echo '</pre>';
});

