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
Route::get('/mprofile', ['uses'=>'ProfileController@showProfile', 'as'=>'mprofile' ] )->middleware('auth');
Route::get('/talks/{id}', ['uses'=>'TalksController@index', 'as'=>'talks' ] )->middleware('auth');
Route::get('/contacts', ['uses'=>'ContactsController@index', 'as'=>'contacts' ] )->middleware('auth');
Route::get('/findpar', ['uses'=>'FindPartnerController@index', 'as'=>'findpar' ] )->middleware('auth');
Route::get('/sendInvitation/{id}', ['uses'=>'TalksController@sendInv', 'as'=>'sendInvitation' ] )->middleware('auth');

Route::post('/findPartner', ['uses'=>'FindPartnerController@findPartner', 'as'=>'findPartner' ] )->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

