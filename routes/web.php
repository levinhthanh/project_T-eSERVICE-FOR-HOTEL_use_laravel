<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

//Start
Route::get('/', function () {
    return view('welcome');
});
//Logout
Route::get('/home', function () {
    return view('welcome');
});

// ADMIN ROUTE
Route::prefix('/admin')->group(function () {
    Route::get('/', function () {
        if(Auth::user()->is_admin){
            return view('admin.admin');
        }
        else{
            //page lỗi
        }
    })->name('admin_page');
});


// Route::get('/home', 'HomeController@index')->name('home');




