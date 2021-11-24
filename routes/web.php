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
Route::get('all_patients','all_patients@checkDB');
Route::get('patients_by_id','patients_by_id@checkDB');
Route::get('patients_by_name','patients_by_name@checkDB');
Route::get('insert_patient','insert_patient@checkDB');