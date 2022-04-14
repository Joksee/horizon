<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});

TENTATIVA NUMERO 1 - ERRO DE NAO RECONHEÇER  ROTA
Route::name('Site')->group (function() {
        Route::get('/',[HomeController::class]);
});
*/

//Grupo de rotas para namespace Site
Route::group(['namespace'=>'App\Http\Controllers\Site'],function(){

    Route::get('/','HomeController@index')->name('site.home');;

    Route::get('/Produtos', 'CategoryController@index')->name('site.products');
    Route::get('/Produtos/{category}', 'CategoryController@show')->name('site.products.category');

    //adiconar rotas mais tarde para  aba dos serviços, trocar oa tributo slug para outro atributo
    Route::get('/Serviços', 'ServicesController@index')->name('site.services');
    Route::get('/Serviços/{slug}', 'ServicesController@show')->name('site.services.category');

    Route::view('/sobre', 'Site.About.Index')->name('site.about');

    Route::get('/Contato', 'ContactController@index')->name('site.contact');
    Route::post('/Contato', 'ContactController@formulario')->name('site.contact.form');
    
    });
    

