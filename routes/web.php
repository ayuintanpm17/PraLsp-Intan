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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', 'PagesController@login')->name('login');

Route::prefix('administrator')->group(function(){
	Route::get('/', 'AberandaController@dashboard')->name('administrator');

	Route::prefix('Order')->group(function(){
		Route::get("/all", "OrderController@all");
		Route::post("/save", "OrderController@save");
		Route::post("/update", "OrderController@update");
		Route::get("/delete/{id}", "OrderController@delete");
	});

	Route::prefix('Detail')->group(function(){
		Route::get('/all', 'DetailOrderController@all');
		Route::get('/tambah', 'DetailOrderController@tambah');
		Route::post('/proses-tambah', 'DetailOrderController@proses_tambah');
		Route::get('/detail/{id}', 'DetailOrderController@detail');
		Route::post('/proses_detail', 'DetailOrderController@proses_detail');
		Route::get('/hapus/{id}', 'DetailOrderController@hapus');
	});
	
	Route::prefix('Masakan')->group(function(){
		Route::get("/all", "MasakanController@all");
		Route::post("/save", "MasakanController@save");
		Route::post("/update", "MasakanController@update");
		Route::get("/delete/{id}", "MasakanController@delete");
	});
	Route::prefix('Transaksi')->group(function(){
		
		Route::get("/all", "TransaksiController@all");
		Route::post("/save", "TransaksiController@save");
		Route::post("/update", "TransaksiController@update");
		Route::get("/delete/{id}", "TransaksiController@delete");
	});
});

