<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('edits',function(){
    return view('user.edit');
})->name('user.edit');

Route::get('deletes',function(){
    return view('user.delete');
})->name('user.delete');

Route::get('creates',function(){
    return view('user.create');
})->name('user.create');

Route::get('dashboard',function(){
    return view('user.dashboard');
});

Route::get('genders',function(){
    return view('user.gender');
})->name('user.gender');

Route::get('views',function(){
    return view('user.view');
})->name('user.view');

Route::get('viewspes',function(){
    return view('user.viewspecific');
})->name('user.viewspecific');
