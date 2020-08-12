<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::prefix('authors')->group(function(){

//     Route::get('authors', 'AuthorController@index');
//     Route::get('/{author}', 'AuthorController@show');
//     Route::put('/{author}', 'AuthorController@update');
//     Route::patch('/{author}', 'AuthorController@update');
//     Route::post('', 'AuthorController@store');
//     Route::delete('/{author}', 'AuthorController@destroy');
// });



// Route::get('books', 'BookController@index');
// Route::get('books/{book}', 'BookController@show');
// Route::put('books/{book}', 'BookController@update');
// Route::patch('books/{book}', 'BookController@update');
// Route::post('books', 'BookController@store');
// Route::delete('books/{book}', 'BookController@destroy');

Route::apiResources([
    'authors' => 'AuthorController',
    'books' => 'BookController'
]);




