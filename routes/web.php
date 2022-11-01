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

Route::group(['middleware' => ['auth']],function(){
    
    Route::get('/', 'HomeController@index');
    
    Route::get('/reviews/index', 'UserController@index');

    Route::get('/reviews/create', 'ReviewController@create');

    Route::get('/reviews/{user}', 'UserController@show');

    Route::post('/reviews', 'ReviewController@store');

    Route::get('/posts/index', 'UserController@index');

    Route::get('/posts/{user}/edit', 'UserController@edit');
    Route::put('/posts/{user}', 'UserController@update');

    Route::delete('/posts/{user}', 'UserController@delete');

    Route::get('/gets/index', 'TargetController@create');

    Route::get('/gets/setting', 'TargetController@setting');
 
});
Auth::routes();


