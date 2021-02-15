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

Route::get('/', function () {
    return redirect('/login');
});
Route::group(['middleware' => ['auth']], function () {

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/create-books','BooksController@validateBooks');
Route::get('/delete-books/{id}','BooksController@deleteBooks');
Route::get('/get-books','BooksController@getBooks')->name("Books Details");
Route::get('/get-create-books-form','BooksController@getCreateBooksForm')->name("Add Books");
Route::post('/search-books','BooksController@searchBooks')->name("Books Details");
});

Route::get('/logout','HomeController@logMeOut');

Auth::routes();