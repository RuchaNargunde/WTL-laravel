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

// Route::get('/client-homepage', function () {
//     return view('clientHomePage');
// });

Route::group( ['prefix' => 'client-homepage'], function(){

    Route::get('/','clientHPController@homepage');
    Route::get('/announcements','clientHPController@announce')->name('announcements');


});


Route::get('/clientProfile', function () {
    return view('clientProfile');
});

Route::get('/viewOurLawyers', function () {
    return view('viewOurLawyers');
});

Route::get('/registerNewCase',function(){
    return view('registerNewCase');
});

Route::get('/caseRecords',function(){
    return view('caseRecords');
});