<?php
use App\Http\Controllers\questionControler;
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



Route::get('/coba', function ()
{
    return view('/items/coba');
});

Route::get('/', 'ControllerArtikel@showErd'); //menampilkan view erd
Route::get('/artikel/create', 'ControllerArtikel@createFormArtikel');//menampilkan form artikel
Route::post('/artikel', 'ControllerArtikel@storeArtikel' ); //menyimpan artikel dari form
Route::get('/artikel', 'ControllerArtikel@index');//menampilkan data dari db

Route::get('/artikel/{id}', 'ControllerArtikel@detailArtikel'); //menampilkan detail artikel dari id

Route::put('/artikel/{id}','ControllerArtikel@updateArtikel' ); //update artikel ddari form
Route::get('/artikel/{id}/update','ControllerArtikel@editArtikel');//menampilkan form update untuk artikel

Route::delete('artikel/{id}', 'ControllerArtikel@deleteArtikel'); //menghapus artikel


Route::get('/items/create', 'ItemController@create'); // menampilkan halaman form
Route::post('/items', 'ItemController@store'); // menyimpan data
Route::get('/items', 'ItemController@index'); // menampilkan semua
Route::get('/items/{id}', 'ItemController@show'); // menampilkan detail item dengan id
Route::get('/items/{id}/edit', 'ItemController@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'ItemController@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'ItemController@destroy'); // menghapus data dengan id
