<?php

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
    return view('welcome');
});

/*Route::get('/', function ()
{
  return '<h1>Hello World<h1>';
});

Route::get('/hellomoto', function ()
{
  return '<h1>Hello Moto</h1>';
});

Route::get('/hentai', function ()
{
  return '<h1>primeiro teste com HENTAI!!</h1>';
});

Route::get('/tentacthulhus', function ()
{
  return '<h1>Primeiro teste com TENTACTHULHUS!1!1!!!</h1>';
});
*/
Route::get('/produtos', 'ProdutoController@lista');

Route::get(
  '/produtos/mostra/{id}',
  'ProdutoController@mostra'
  )
  ->where('id', '[0-9]+');

  Route::get('/produtos/novo', 'ProdutoController@novo');

  Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

  Route::get('/produtos/json', 'ProdutoController@listaJson');

  Route::get(
    '/produtos/remove/{id}',
    'ProdutoController@remove'
    )
    ->where('id', '[0-9]+');

  Route::get('/produtos/edita/{id}', 'ProdutoController@edita')->where('id', '[0-9]+');

  Route::get('/produtos/update', 'ProdutoController@update');
