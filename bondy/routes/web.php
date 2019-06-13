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

Route::get('/tables', function () {
    return view('tables');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tables', 'Admin\UserController@index')->name('index.user');
Route::get('/tables/store', 'Admin\UserController@store');
Route::get('/tables/edit/{id}', 'Admin\UserController@edit')->name('edit.user');
Route::post('/tables/update/{id}', 'Admin\UserController@update')->name('update.user');
Route::get('/tables/delete/{id}', 'Admin\UserController@destroy')->name('destroy.user');
Route::get('/create','Admin\UserController@create')->name('create.user');

Route::resource('math', 'mathController');
Route::resource('physical', 'physicalController');
Route::resource('enghlish', 'EnghlishController');
Route::resource('chemistry', 'chemistryController');
Route::resource('biological', 'biologicalController');
Route::resource('tintuc', 'tintucController');




Auth::routes();
Route::get('/tables', 'Admin\UserController@index')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pdfview', 'PdfGenerateController@pdfview')->name('pdfview');

Route::resource('users', 'Admin\UserController');
Route::post('/math/update/{id}', 'mathController@update')->name('update.math');
Route::get('/math/edit/{id}', 'mathController@edit')->name('edit.math');
Route::get('/math/delete/{id}', 'mathController@destroy')->name('destroy.math');

Route::post('/physical/update/{id}', 'physicalController@update')->name('update.physical');
Route::get('/physical/edit/{id}', 'physicalController@edit')->name('edit.physical');
Route::get('/physical/delete/{id}', 'physicalController@destroy')->name('destroy.physical');

Route::post('/enghlish/update/{id}', 'enghlishController@update')->name('update.enghlish');
Route::get('/enghlish/edit/{id}', 'enghlishController@edit')->name('edit.enghlish');
Route::get('/enghlish/delete/{id}', 'enghlishController@destroy')->name('destroy.enghlish');

Route::post('/chemistry/update/{id}', 'chemistryController@update')->name('update.chemistry');
Route::get('/chemistry/edit/{id}', 'chemistryController@edit')->name('edit.chemistry');
Route::get('/chemistry/delete/{id}', 'chemistryController@destroy')->name('destroy.chemistry');

Route::post('/biological/update/{id}', 'biologicalController@update')->name('update.biological');
Route::get('/biological/edit/{id}', 'biologicalController@edit')->name('edit.biological');
Route::get('/biological/delete/{id}', 'biologicalController@destroy')->name('destroy.biological');
Route::get('/khoia', 'khoiaController@index')->name('khoia.index');
Route::get('/khoib', 'khoiaController@khoib')->name('khoib');
Route::get('/vatly', 'VatlyController@index')->name('vatly.index');
Route::post('/vatly/ketqua', 'VatlyController@ketquavatly')->name('ketqua');

Route::get('/toan', 'toanController@index')->name('toan.index');
Route::post('/toan/ketqua', 'toanController@ketquatoan')->name('ketqua1');

Route::get('/hoa', 'hoaController@index')->name('hoa.index');
Route::post('/hoa/ketqua', 'hoaController@ketquahoa')->name('ketqua2');

Route::get('/sinh', 'sinhController@index')->name('sinh.index');
Route::post('/sinh/ketqua', 'sinhController@ketquasinh')->name('ketqua3');

Route::post('/vatly/save', 'HistoryController@save')->name('save.vatly');
Route::post('/khoia/ketqua', 'HistoryController@luu')->name('luu');
Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');

Route::post('/khoia/ketqua', 'khoiaController@dapantoan')->name('dapantoan');
Route::post('/khoia/dapanly', 'khoiaController@dapanly')->name('dapanly');
Route::post('/khoia/dapanhoa', 'khoiaController@dapanhoa')->name('dapanhoa');
Route::get('/khoia/ketqua', 'khoiaController@dapanhoa')->name('ketquakhoia');
Route::post('/khoia/dapan', 'khoiaController@dapan')->name('khoiadapan');
Route::get('/tintuc', 'tintucController@index')->name('tintuc');
Route::get('/tienganh', 'tienganhController@index')->name('tienganh.index');
Route::post('/tienganh/ketqua', 'tienganhController@ketqua')->name('ketqua41');

