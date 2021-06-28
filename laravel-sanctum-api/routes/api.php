<?php


use Illuminate\Http\Request;

############## Including Controller(s) ###############

use App\Http\Controllers\ProductController;

###########################################
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

#################### Public Routes #########################
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products', 'ProductController@store');
Route::put('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');
Route::get('/products/search/{name}', 'ProductController@search');
#############################################################
#################### Protected Routes #######################
#############################################################
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
