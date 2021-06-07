<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Resources\UserResource;
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
    //return $request->user();
	return new UserResource($request->user());
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');




Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile/{id}', ['uses'=>'Api\ProfileController@show', 'as'=>'profile' ] );
    Route::post('/updprofile', ['uses'=>'Api\ProfileController@update', 'as'=>'updprofile' ] );
    Route::delete('/delProfile/{id}', [ProfileController::class, 'destroy']);
	
	Route::get('/countries', ['uses'=>'Api\CountryController@index', 'as'=>'countries' ] );
	Route::get('/languages', ['uses'=>'Api\LanguageController@index', 'as'=>'languages' ] );
});
