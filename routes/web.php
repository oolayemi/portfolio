<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/', 'BirthdayController@store')->name('birthday.store');

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function (){
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/table', 'AdminController@table')->name('admin.table');
});


