<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Testing -> PDF Generation using barryvdh/laravel-dompdf
Route::get('/pdf', function(){ return view('pdf.form'); });

Route::get('/index','UserDetailsController@index');

Route::post('submitForm', 'UserDetailsController@store');

Route::get('/downloadPDF/{id}', 'UserDetailsController@downloadPDF');

// Testing - PDF ends