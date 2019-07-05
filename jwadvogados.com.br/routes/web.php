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

Route::get('/', 'SiteController@index')->name('site.index');
Route::get('/quem-somos', 'SiteController@quem_somos')->name('site.quem_somos');
Route::get('/areas-de-atuacao', 'SiteController@areas_atuacao')->name('site.areas_atuacao');
Route::get('/entre-em-contato', 'SiteController@contato')->name('site.contato');
Route::post('/message', 'SiteController@message')->name('site.message');
Route::get('/noticias-juridicas', 'SiteController@blog')->name('site.blog');
Route::get('/noticias-juridicas/{slug}', 'SiteController@post')->name('site.post');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('advogados', 'AdvogadoController');
Route::resource('contatos', 'ContatoController');
Route::resource('posts', 'PostController');

