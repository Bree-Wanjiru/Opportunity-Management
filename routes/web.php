<?php

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OpportunityController;


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

//All opportunities
Route::get('/', [OpportunityController::class, 'index']);

//reviews page
Route::get('/opportunities/reviews', [OpportunityController::class, 'reviews']);

//about us page
Route::get('/opportunities/about', [OpportunityController::class, 'about']);

//Show create form
Route::get('/opportunities/create', [OpportunityController::class, 'create'])->middleware('auth');

//Store opportunity data
Route::post('/opportunities', [OpportunityController::class, 'store'])->middleware('auth');

//Show edit form
Route::get('/opportunities/{opportunity}/edit', [OpportunityController::class, 'edit'])->middleware('auth');

//submit edit-update form
Route::put('/opportunities/{opportunity}', [OpportunityController::class, 'update'])->middleware('auth');

//delete opportunity
Route::delete('/opportunities/{opportunity}', [OpportunityController::class, 'destroy'])->middleware('auth');

//manage opportunities
Route::get('/opportunities/manage', [OpportunityController::class, 'manage'])->middleware('auth');

//Single opportunity
Route::get('/opportunities/{opportunity}', [OpportunityController::class, 'show']);

//show register/create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

