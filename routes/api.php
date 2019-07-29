<?php

use Illuminate\Http\Request;

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
Route::get('mostraAula/{id}','AulaController@showAula')->name('mostraAula');
Route::get('listaAula','AulaController@listAula');
Route::post('criaAula','AulaController@createAula');
Route::put('atualizaAula/{id}','AulaController@updateAula');
Route::delete('deletaAula/{id]','AulaController@deleteAula');

Route::get('mostraAluno/{id}','AlunoController@showAluno')->name('mostraAluno');
Route::get('listaAluno','AlunoController@listAluno');
Route::post('criaAluno','AlunoController@createAluno');
Route::put('atualizaAluno/{id}','AlunoController@updateAluno');
Route::delete('deletaAluno/{id]','AlunoController@deleteAluno');