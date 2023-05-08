<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\UserController;



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


    Route::get('/users/mypage', [UserController::class, 'mypage'])->name('mypage');
    Route::get('/users/mypage/edit', [UserController::class, 'edit'])->name('mypage.edit');
    Route::put('/users/mypage', [UserController::class, 'update'])->name('mypage.update');
    Route::get('users/mypage/password/edit', [UserController::class, 'edit_password'])->name('mypage.edit_password');
    Route::put('users/mypage/password', [UserController::class, 'update_password'])->name('mypage.update_password'); 
    Route::delete('users/mypage/delete', [UserController::class, 'destroy'])->name('mypage.destroy');



    Route::get('/recruitment', [RecruitmentController::class, 'index' ])->name('recruitments.index');
    Route::post('/create', [RecruitmentController::class, 'create' ])->name('recruitments.create');

    
    Route::get('/contact', [ContactsController::class, 'index'])->name('contact.index');
    Route::post('/contact/confirm', [ContactsController::class, 'confirm'])->name('contact.confirm');
    Route::post('/contact/thanks', [ContactsController::class, 'send'])->name('contact.send');


    Route::resource('recruitments', RecruitmentController::class);
    Auth::routes(['verify' => true]);
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



    Route::get('/', [RecruitmentController::class, 'index' ])->name('recruitments.recruitment_form');




