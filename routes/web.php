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
    
    Route::get('/reviews/index', 'ReviewController@index');

    Route::get('/reviews/create', 'ReviewController@create');

    Route::get('/reviews/{review}', 'ReviewController@show');

    Route::post('/reviews', 'ReviewController@store');

    Route::get('/reviews/{review}/edit', 'ReviewController@edit');
    Route::put('/reviews/{review}', 'ReviewController@update');
    

    Route::get('/tickets/index', 'TicketController@index');

    Route::get('/tickets/create', 'TicketController@create');

    Route::get('/tickets/{ticket}', 'TicketController@show');

    Route::post('/tickets', 'TicketController@store');

    Route::get('/tickets/{ticket}/edit', 'TicketController@edit');
    
    Route::get('/tickets-get', 'TicketController@getTickets');
    
    Route::put('/tickets/{ticket}', 'TicketController@update');

    Route::delete('/tickets/{ticket}', 'TicketController@delete');
    
    

    Route::delete('/reviews/{review}', 'ReviewController@delete');

    Route::get('/gets/index', 'TargetController@create');

    Route::get('/gets/setting', 'TargetController@setting');

    
    Route::get('/gets/google_login', 'LoginController@index');
 
});
Auth::routes();


