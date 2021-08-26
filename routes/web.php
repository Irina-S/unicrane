<?php

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
*/

//страницы сайта
Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'IndexController@about')->name('about');
Route::get('/contacts', 'IndexController@contacts')->name('contacts');
Route::get('/service', 'IndexController@service')->name('service');
Route::get('/equipment', 'IndexController@equipment')->name('equipment');
Route::get('/calculate', 'IndexController@calculate')->name('calculate');

//авторизация в админке
Route::group([
    'namespace' => 'Auth',
], function() {
    Route::get('myLogin21', 'LoginController@showLoginForm')->name('login');
    Route::post('myLogin21', 'LoginController@login');
    Route::post('logout', 'LoginController@logout')->name('logout');
});

// Роуты для работы админа
Route::group([
    'prefix' => 'myCabinet21',
    'as' => 'admin.',
    'middleware' => ['auth', 'isAdmin'],
    'namespace' => 'Admin',
], function() {
    Route::get('/', 'AdminController@index')->name('index');
    Route::post('/edit', 'AdminController@editContent')->name('edit');
//    Route::get('/makeInclude', 'CmsController@makeInclude')->name('makeInclude');

    Route::group([
        'prefix' => 'seo',
        'as' => 'seo.'
    ], function () {
       Route::get('/', 'SeoController@index')->name('index');
       Route::get('/edit/{id}', 'SeoController@edit')->name('edit');
       Route::post('/update/{id}', 'SeoController@update')->name('update');
    });
});
