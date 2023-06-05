<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\LoginController@index')->name('login')->middleware('guest');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@index')->name('register')->middleware('guest');
Route::post('register', 'Auth\RegisterController@register');


Route::get('', 'Frontend\HomeController@index')->name('frontend.index');
Route::get('jobs', 'Frontend\HomeController@jobs')->name('frontend.joblist');
Route::get('job/{slug}', 'Frontend\HomeController@detail')->name('frontend.jobdetail');
Route::post('apply/post', 'Frontend\HomeController@apply')->name('frontend.apply.post')->middleware('auth');
Route::get('apply/{slug}', 'Frontend\HomeController@showFormApply')->name('frontend.apply')->middleware('auth');

// Route::get('/', function () {
//     return view('layouts.app');
// });

// Route::view('frontend/index', 'pages.frontend.index');
// Route::view('/login', 'pages.auth.login');
// Route::view('/register', 'pages.auth.register');
// Route::view('frontend/joblist', 'pages.frontend.joblist');
// Route::view('frontend/jobdetail', 'pages.frontend.jobdetail');
// Route::view('frontend/apply', 'pages.frontend.apply');

// Route::get('auth/login', 'Frontend\LoginController@showLoginForm')->name('frontend.auth.login');
// Route::post('auth/login', 'Frontend\LoginController@login');
// Route::get('frontend/index', 'FrontendController@index')->middleware('auth');

// Route::get('auth/register', 'Auth\RegisterController@index')->name('auth.register.index');
// Route::post('auth/register', 'Auth\RegisterController@create')->name('auth.register.create');


// Route::get('frontend/index', 'Frontend\FrontendController@index')->name('frontend.index');
// Route::get('frontend/joblist', 'Frontend\JoblistController@index')->name('frontend.joblist.index');
// Route::get('frontend/jobdetail', 'Frontend\JobdetailController@index')->name('frontend.jobdetail.index');
// Route::get('mail/email', 'SendEmail@index')->name('email.index');

Route::get('home/search', 'Frontend\HomeController@search')->name('frontend.search');
Route::get('frontend/joblist/search', 'Frontend\JoblistController@search')->name('frontend.joblist.search');

Route::get('admin/loker', 'Admin\LokerController@index')->name('admin.loker.index')->middleware('auth');
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