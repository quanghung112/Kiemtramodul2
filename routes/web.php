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
//
Route::get('/', function () {
    return view('layout');
});
Route::group(['prefix' => 'employees'], function () {
    Route::get('/list', 'EmployeeController@listEmployee')->name('employee.list');
    Route::get('/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/store','EmployeeController@store')->name('employee.store');
    Route::get('/{id}/delete','EmployeeController@delete')->name('employee.delete');
    Route::get('/{id}/update','EmployeeController@update')->name('employee.update');
    Route::post('/{id}/upgrade','EmployeeController@upgrade')->name('employee.upgrade');
    Route::get('/search','EmployeeController@search')->name('employee.search');
});
