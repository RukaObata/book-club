<?php

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

Route::get('/', 'BooksController@mypage')->name('mypage');
// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');
// 認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
        Route::get('followings', 'UsersController@followings')->name('users.followings');
        Route::get('followers', 'UsersController@followers')->name('users.followers');
        Route::get('allusers', 'UsersController@allusers')->name('users.users');
    });
//さがす
    Route::get('serch', 'BooksSerchController@index')->name('serch.index');
    Route::post('serch/result', 'BooksSerchController@serching')->name('serch.serching');

    Route::get('index', 'BooksController@index')->name('users.books');
    Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
    
    Route::resource('book_register','BooksController');
//本の登録    
    Route::get('books/serch', 'BookRegisterController@showRegisterForm')->name('books.serch');
    Route::post('books/create', 'BookRegisterController@getBooksData')->name('books.create');
    Route::post('books/store', 'BookRegisterController@store')->name('books.store');
    //本のレビューを登録している場合
    Route::get('review/edit', 'ReviewsController@edit')->name('reviews.edit');
});