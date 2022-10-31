<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandsController;


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

Route::get('/', [FrontendController::class, 'index'])->name('index');

Route::get('redirect/{driver}', [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider']);
Route::get('{driver}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleProviderCallback']);

Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('ads', AdsController::class);
    Route::resource('brands', BrandsController::class);
});

Route::any('user_profile_edit/{id}', [UserController::class, 'user_profile_edit'])->name('user_profile_edit');