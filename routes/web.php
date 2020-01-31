<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| GET
| POST (CREATE)
| PUT / PATCH (UPDATE)
| DELETE
|
*/


/**
 * Rotas do Ajax
 */
Route::group(['namespace' => 'Ajax', 'prefix' => 'ajax'], function()
{
    // Combos
    Route::post('options-propertytype', 'OptionsController@propertytype');
    Route::post('options-city', 'OptionsController@city');
});


/**
 * Rotas do Site
 */
Route::group(['namespace' => 'Site'], function()
{
    // Home
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('home', 'HomeController@index');
    // Advertise
    Route::get('anunciar-meu-imovel', 'AdvertiseController@index')->name('advertise');
    Route::post('anunciar-meu-imovel', 'AdvertiseController@create')->name('advertise');
    // Services
    Route::get('servicos/gestao-imobiliaria', 'ServiceController@indexRE')->name('realestate');
    Route::get('servicos/consultoria-juridica', 'ServiceController@indexLA')->name('legaladvice');
    // About Us
    Route::get('sobre-shekinah', 'AboutController@index')->name('about');
    // Contact Us
    Route::get('contato', 'ContactController@index')->name('contact');
    Route::post('contato', 'ContactController@create')->name('contact');
    // Terms and conditions
    Route::get('termos-condicoes', 'TermsController@index')->name('terms');
    // Search
    // Route::resource('resultado', 'SearchController')
    //     ->only(['show'])
    //     ->names(['show' => 'search.show'])
    //     ->parameters(['resultado' => 'search?']);
});


/**
 * Rotas da busca
 *
 * Exemplo: site.com/{comprar|alugar}/{todos|"slug"}/{sao-paulo}/{?}
 */
Route::match(['get', 'post'], '/{search_type?}/{property_type?}/{state?}/{city?}', 'Site\SearchController@show')->name('search');


/**
 * Rotas protegidas do Admin
 */
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function()
{
    // Home
    Route::get('/', 'DashboardController@index')->name('dashboard');

    // ADMIN ===========================================================================================
    // Properties Management
    Route::get('imoveis-publicados', 'PropertyController@listPublished')->name('properties-published');
    Route::get('imoveis-pendentes', 'PropertyController@listWaiting')->name('properties-waiting');
    Route::get('imoveis-concluidos', 'PropertyController@listDone')->name('properties-done');

    Route::get('anunciar-meu-imovel', 'PropertyController@form')->name('properties-advertise');
    Route::get('editar-meu-imovel/{property?}/{page?}', 'PropertyController@form')->name('properties-form');
    Route::post('salvar-meu-imovel', 'PropertyController@store')->name('properties-store');

    // Features Management
    Route::get('caracteristicas', 'FeatureController@list')->name('properties-feature');
    Route::get('tipos-imoveis/{group}', 'PropertyTypeController@list')->name('properties-type');
    // Contacts
    Route::get('mensagens-recebidas', 'ContactController@list')->name('contact-list');
    Route::get('mensagens-recebidas/{message}/{page}', 'ContactController@view')->name('contact-view');
    Route::post('mensagem-nao-lida', 'ContactController@read')->name('contact-form');

    // REALTOR =========================================================================================


    // ADVERTISER ======================================================================================
    Route::get('meus-imoveis', 'PropertyController@listMine')->name('properties-mine');

});

Auth::routes();
