<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/Listbook', 'GuestController@index');
Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
  Route::resource('users', 'UserController');
  Route::resource('authors', 'AuthorsController');
  Route::resource('books', 'BooksController');
  
  // project hersana
  Route::resource('customers', 'CustomerController');
  Route::resource('bahans', 'BahansController');
  Route::resource('stoks', 'StoksController');
  Route::resource('komposisis', 'KomposisisController');

  Route::resource('perencanaans', 'PerencanaansController');
  Route::get('/findDataKomposisi','PerencanaansController@findDataKomposisi');

  
//REPORT
  Route::resource('reports', 'ReportsController');
  Route::get('/findDataPerencanaan','ReportsController@findDataPerencanaan');

  Route::get('export/reports', [
    'as'   => 'export.reports',
    'uses' => 'ReportsController@export'
  ]);
  
  Route::post('export/reports', [
    'as'   => 'export.reports.post',
    'uses' => 'ReportsController@exportPost'
  ]);







//CUSTOM REPORT
  Route::resource('customreports', 'CustomReportController');
  Route::get('/findDataPerencanaan','CustomReportController@findDataPerencanaan');

  Route::get('admin/report1', 'CustomReportController@exportPdf');

  Route::get('export/customreports', [
    'as'   => 'export.customreports',
    'uses' => 'CustomReportController@export'
  ]);
  
  Route::post('export/customreports', [
    'as'   => 'export.customreports.post',
    'uses' => 'CustomReportController@exportPost'
  ]);


  // Report
  Route::get('export/reportperperencanaans', [
    'as'   => 'export.reportperperencanaans',
    'uses' => 'ReportPerPerencanaanController@export'
  ]);
  
  Route::post('export/reportperperencanaans', [
    'as'   => 'export.reportperperencanaans.post',
    'uses' => 'ReportPerPerencanaanController@exportPost'
  ]);

  


 

  // book
  Route::get('export/books', [
    'as'   => 'export.books',
    'uses' => 'BooksController@export'
  ]);
  
  Route::post('export/books', [
    'as'   => 'export.books.post',
    'uses' => 'BooksController@exportPost'
  ]);

  

});

Route::get('books/{book}/borrow', [
  'middleware' => ['auth', 'role:member'],
  'as'         => 'guest.books.borrow',
  'uses'       => 'BooksController@borrow'
]);

Route::put('books/{book}/return', [
  'middleware' => ['auth', 'role:member'],
  'as'         => 'member.books.return',
  'uses'       => 'BooksController@returnBack'
]);

