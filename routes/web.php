<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

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

//Route::get();
//Route::post();
//Route::put();
//Route::patch();
//Route::delete();
//Route::delete();
//Route::Options();


//common route name
//index = show all the data
//show = show single data
//create = show a form to a new user
//store = store a data
//edit = form to edit data
//update = update data
//destroy = delete data

Route::get('/',[EmployeeController::class, 'index']);
Route::get('/register',[UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);
Route::post('/logout', [UserController::class, 'logout']);


Route::post('/store', [UserController::class, 'store']);