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

// Relasi 0ne To Many
Route::get('/orangtua', function(){
	$or = App\orangtua::all();
	foreach ($or as $data) {
		echo $data->nama_ibu." dengan ";
		echo $data->nama_ayah." <br>";
		echo "Membuahkan Hasil";
		foreach ($data->anaks as $key) {
			echo "<li>$key->nama</li><br>";
		}
	}
});

// Route Controller
Route::get('/nama', 'MyController@index');
Route::get('/tampilan', 'MyController@tampilan');
Route::get('/tampilmodel', 'MyController@tampilmodel');
Route::auth();
Route::resource('orangtua','OrangtuaController');