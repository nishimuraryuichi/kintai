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

Route::get('/','EmployeeController@index');
Route::get('/employee/create','EmployeeController@create');
Route::get('/employee/{id}','EmployeeController@show');
Route::post('/employee','EmployeeController@store');
Route::get('/employee/{employee}/edit','EmployeeController@edit');
Route::patch('/employee/{employee}','EmployeeController@update');
Route::delete('/employee/{employee}','EmployeeController@destroy');
Route::post('/employee/{employee}','TimecardController@in');
Route::post('/employee/{employee}/out','TimecardController@out')->name('employee/out');
