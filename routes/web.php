<?php

use App\Http\Controllers\Auth\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ========================= EMPLOYEE =======================================
Route::get('/employee','EmployeeController@index')->name('employee');
Route::post('/addimage','EmployeeController@store')->name('addimage');
Route::get('/employeepage','EmployeeController@display');
Route::get('/editimage/{id}','EmployeeController@edit');
Route::put('/updateimage/{id}','EmployeeController@update');
Route::get('/deleteimage/{id}','EmployeeController@delete');

// ========================= ARTIKEL ========================================
Route::get('/artikelform','ArtikelFormController@index')->name('artikelform');
Route::post('/addartikel','ArtikelFormController@store')->name('addartikel');
Route::get('/artikelpage','ArtikelFormController@display');
Route::get('/artikelsearch','ArtikelFormController@search');
Route::get('/artikeledit/{id}','ArtikelFormController@edit');
Route::put('/artikelupdate/{id}','ArtikelFormController@update');
Route::get('/artikeldelete/{id}','ArtikelFormController@delete');



// ========================= Isi Berita =====================================
Route::get('/','ArtikelFormController@artikelnewsportal');
Route::get('/updateartikel', function (){
    return view('artikel.artikelupdate');
});
