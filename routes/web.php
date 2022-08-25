<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\PagesController@login');

Route::get('/admin', 'App\Http\Controllers\AdminController@landing')->name("admin.index");
// Route::get('/admin/manage_voter', 'App\Http\Controllers\VoterController@manage_voter')->name("admin.manage_voter");
// Route::get('/admin/manage_candidate', 'App\Http\Controllers\CandidateController@index')->name("admin.manage_candidate");


Route::get('/admin/manage_candidate/edit', 'App\Http\Controllers\CandidateController@edit_candidate')->name("manage_candidate.edit_candidate");//for static purposes -- must use edit part of the controller to be able to fetch data from DB
Route::resource('admin/manage_candidate', 'App\Http\Controllers\CandidateController'); //for db 

// Route::get('/admin/manage_voter/edit', 'App\Http\Controllers\VoterController@edit_voter')->name("manage_voter.edit_voter");//for static purposes -- must use edit part of the controller to be able to fetch data from DB
Route::resource('admin/manage_voter', 'App\Http\Controllers\VoterController'); //for db 


Route::get('/user/view_ranking', 'App\Http\Controllers\UserController@view_ranking')->name("user.view_ranking");
Route::get('/user/vote_now', 'App\Http\Controllers\UserController@vote_now')->name("user.vote_now");
Route::get('/user/view_vote', 'App\Http\Controllers\UserController@view_vote')->name("user.view_vote");
Route::resource('user', 'App\Http\Controllers\UserController'); //for db 


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
