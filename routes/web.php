<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/', 'welcome');
Route::view('/my-story', 'my-story')->name('mystory');
Route::view('/music', 'discography')->name('music');

Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
Route::get('/community/create', [CommunityController::class, 'create'])->name('community.create')->middleware('auth');
Route::post('/community', [CommunityController::class, 'store'])->name('community.store')->middleware('auth');
Route::get('/community/edit/{id}', [CommunityController::class, 'edit'])->name('community.edit')->middleware('auth');
Route::post('/community/update/{id}', [CommunityController::class, 'update'])->name('community.update')->middleware('auth');
Route::get('/community/delete/{id}', [CommunityController::class, 'destroy'])->name('community.destroy')->middleware('auth');

Route::get('/contact-us', [ContactController::class, 'contactView'])->name('contactUs');
Route::post('/contact-us', [ContactController::class, 'sendContactMessage'])->name('contactSend');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');