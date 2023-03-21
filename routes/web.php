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
    return view('layouts.app');
});

Route::get('admin/loker', 'Admin\LokerController@index')->name('admin.loker.index');
Route::get('admin/datapelamar', 'Admin\DataPelamarController@index')->name('admin.data_pelamar.index');
Route::get('admin/inputloker', 'Admin\InputLokerController@index')->name('admin.input_loker.index');
Route::get('admin/loker/create', 'Admin\LokerController@create')->name('admin.loker.create');
Route::post('admin/loker/create', 'Admin\LokerController@store')->name('admin.loker.store');
Route::get('admin/loker/edit/{id}', 'Admin\LokerController@edit')->name('admin.loker.edit');
Route::post('admin/loker/update/{id}', 'Admin\LokerController@update')->name('admin.loker.update');
Route::get('admin/loker/delete/{id}', 'Admin\LokerController@destroy')->name('admin.loker.delete');
Route::get('admin/loker/search', 'Admin\LokerController@search')->name('admin.loker.search');
Route::get('admin/datapelamar/search', 'Admin\DataPelamarController@search')->name('admin.data_pelamar.search');

Route::get('admin/datapelamar/export', 'Admin\DataPelamarController@datapelamarexport')->name('admin.data_pelamar.datapelamarexport');
Route::get('admin/inputloker/export', 'Admin\InputLokerController@datapelamarexport')->name('admin.input_loker.inputlokerexport');