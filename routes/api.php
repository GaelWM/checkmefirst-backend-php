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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
<<<<<<< HEAD
    Route::resource('expenses', 'API\ExpenseController');
    Route::resource('expense_items', 'API\ExpenseItemController');
    Route::resource('categories', 'API\CategoryController');
    Route::resource('users', 'API\UserController');
});
=======
    Route::get('expenses', 'API\ExpenseController@index');
});

>>>>>>> 74cce18e799f4104c8c97ce1a2b72f04f618f529
