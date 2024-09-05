<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\stuController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welco', [UserController::class, 'welcome']);


Route::get('/check', [UserController::class, 'check']);

Route::get('/showdata', [UserController::class, 'showName'])->name('showData');

Route::get('/single/{id}', [UserController::class, 'singleUser'])->name('singleData');


Route::get('/delete/{id}', [UserController::class, 'deleteData'])->name('deleteUserData');

Route::post('/add', [UserController::class, 'addUser'])->name('addUserData');
Route::view('/adduser', 'pages.add')->name('adduserdata');

Route::get('/edit/{id}', [UserController::class, 'Edit'])->name('userdataupdate');
Route::post('/edituser/{id}', [UserController::class, 'edituser'])->name('userdata');


Route::fallback(function(){
    return view('error');
});


Route::resource('/stu', stuController::class);


Route::resource('user', UserController::class);
Route::resource('psot', PostController::class);


Route::resource('test', TestController::class);