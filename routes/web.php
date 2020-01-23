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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
//------------------------------------------------------------------
Route::get('/roles', 'RolesController@index')->name('roles');
Route::get('/role/delete/{id}', 'RolesController@destroy')->name('role.delete');
//---------------------------------------------------------------------

Route::get('/employee/createnew', 'EmployeesController@create')->name('employee.create');
Route::post('/employee/store', 'EmployeesController@store')->name('employee.store');
Route::get('/employees', 'EmployeesController@index')->name('employees');
Route::get('/employee/edit/{id}', 'EmployeesController@edit')->name('employee.edit');
Route::post('/employee/update/{id}', 'EmployeesController@update')->name('employee.update');
Route::get('/employee/show/{id}', 'EmployeesController@show')->name('employee.show');
Route::get('/employee/delete/{id}', 'EmployeesController@destroy')->name('employee.delete');

Route::get('/classes', 'ClassesController@index')->name('classes');
Route::get('/class/edit/{id}', 'ClassesController@edit')->name('class.edit');
Route::post('/class/update/{id}', 'ClassesController@update')->name('class.update');

Route::get('/subjects', 'SubjectsController@index')->name('subjects');
Route::get('/subject/edit/{id}', 'SubjectsController@edit')->name('subject.edit');
Route::post('/subject/update/{id}', 'SubjectsController@update')->name('subject.update');
Route::get('/subject/show/{id}', 'SubjectsController@show')->name('subject.show');


Route::get('/schedule/show/{id}', 'SchedulesController@show')->name('schedule.show');
