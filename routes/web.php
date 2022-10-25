<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;      //追加
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
Route::get('/posts/index', 'UserController@index');

Route::get('/posts/create', 'UserController@create');

Route::get('/posts/{user}', 'UserController@show');

Route::post('/posts', 'UserController@store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
