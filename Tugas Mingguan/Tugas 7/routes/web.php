<?php

use App\Http\Controllers\GhulamControllers;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/
//Route::resource('home' [HomeController::class, 'index'])
Route::resource('home', HomeController::class);

//Route::get('/welcome', function () {
//    return view('selamatdatang');
//});


//Route::get('/ghulam', function(){
//	echo '<h1>Hallo Dunia</h1>';
//	echo '<p>Kami Mempelajari Laravel</p>' ;
//});

//Route::get('page/{nomor}' ,function($nomor){
//	return 'Ini Halaman ke-' . $nomor;
//});

//Route::get('/image', function () {
//    return view('gambar');
//});

/*Route::get('user', [GhulamController::class, "index"]);

Route::resource('user', GhulamController::class);

Route::group(['namespace' => 'Frontend'], function(){
	Route::resource('home', 'HomeController');
});
*/
Auth::routes();

Route::group(['namespace' => 'Frontend'], function(){
    Route::get('/', 'HomeController@index');
    Route::resource('home', 'HomeController');
});

Route::group(['middleware' => ['web', 'auth']], function(){
    Route::group(['namespace' => 'Backend'], function(){
        Route::resource('dashboard', 'DashboardController');
    });
});