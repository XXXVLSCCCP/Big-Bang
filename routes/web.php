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

Route::get('/admin', ['uses'=>'Admin\IndexController@index', 'as'=>'admin' ] )->middleware('auth');
Route::get('/adminu', ['uses'=>'Admin\IndexController@index', 'as'=>'adminu' ] )->middleware('auth');

Route::get('/admIndCountry', ['uses'=>'Admin\CountriesController@index', 'as'=>'admIndCountry' ] )->middleware('auth');
Route::get('/admAddCountry', ['uses'=>'Admin\CountriesController@index', 'as'=>'admAddCountry' ] )->middleware('auth');
Route::get('/admUpdCountry', ['uses'=>'Admin\CountriesController@index', 'as'=>'admUpdCountry' ] )->middleware('auth');
Route::get('/admDelCountry', ['uses'=>'Admin\CountriesController@index', 'as'=>'admDelCountry' ] )->middleware('auth');

Route::get('/admIndLang', ['uses'=>'Admin\LanguagesController@index', 'as'=>'admIndLang' ] )->middleware('auth');
Route::get('/admAddLang', ['uses'=>'Admin\LanguagesController@index', 'as'=>'admAddLang' ] )->middleware('auth');
Route::get('/admUpdLang', ['uses'=>'Admin\LanguagesController@index', 'as'=>'admUpdLang' ] )->middleware('auth');
Route::get('/admDelLang', ['uses'=>'Admin\LanguagesController@index', 'as'=>'admDelLang' ] )->middleware('auth');

Route::get('/admIndUser', ['uses'=>'Admin\UsersController@index', 'as'=>'admIndUser' ] )->middleware('auth');
Route::get('/admAddUser', ['uses'=>'Admin\UsersController@index', 'as'=>'admAddUser' ] )->middleware('auth');
Route::get('/admUpdUser', ['uses'=>'Admin\UsersController@index', 'as'=>'admUpdUser' ] )->middleware('auth');
Route::get('/admDelUser', ['uses'=>'Admin\UsersController@index', 'as'=>'admDelUser' ] )->middleware('auth');

Route::get('/admIndMs', ['uses'=>'Admin\MessengersController@index', 'as'=>'admIndMs' ] )->middleware('auth');
Route::get('/admAddMs', ['uses'=>'Admin\MessengersController@index', 'as'=>'admAddMs' ] )->middleware('auth');
Route::get('/admUpdMs', ['uses'=>'Admin\MessengersController@index', 'as'=>'admUpdMs' ] )->middleware('auth');
Route::get('/admDelMs', ['uses'=>'Admin\MessengersController@index', 'as'=>'admDelMs' ] )->middleware('auth');

    
Route::get('/adminms', ['uses'=>'Admin\IndexController@index', 'as'=>'adminms' ] )->middleware('auth');
Route::get('/adminst', ['uses'=>'Admin\IndexController@index', 'as'=>'adminst' ] )->middleware('auth');
Route::get('/adminstat', ['uses'=>'Admin\IndexController@index', 'as'=>'adminstat' ] )->middleware('auth');

Route::get('/mprofile', ['uses'=>'ProfileController@showProfile', 'as'=>'mprofile' ] )->middleware('auth');
Route::post('/updprofile', ['uses'=>'ProfileController@updProfile', 'as'=>'updprofile' ] )->middleware('auth');

Route::get('/talks/{id}', ['uses'=>'TalksController@index', 'as'=>'talks' ] )->middleware('auth');
Route::get('/contacts', ['uses'=>'ContactsController@index', 'as'=>'contacts' ] )->middleware('auth');
Route::get('/findpar', ['uses'=>'FindPartnerController@index', 'as'=>'findpar' ] )->middleware('auth');
Route::get('/sendInvitation/{id}', ['uses'=>'TalksController@sendInv', 'as'=>'sendInvitation' ] )->middleware('auth');
Route::post('/sendMsg', ['uses'=>'TalksController@sendMsg', 'as'=>'sendMsg' ] )->middleware('auth');

Route::post('/findPartner', ['uses'=>'FindPartnerController@findPartner', 'as'=>'findPartner' ] )->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

