<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();


Route::get('/users', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("users/list",[UserController::class,"list"])->middleware(["auth"])->name("list");
Route::get("users/edit/{user}",[UserController::class,"edit"])->middleware(["auth","IsManager"])->name("edit");
Route::post("users/update/{user}",[UserController::class,"update"])->middleware(["auth","IsManager"])->name("update");
Route::redirect("/","login");


