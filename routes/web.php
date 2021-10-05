<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorizationController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/arabic', function () {
    return view('arabic');
});

Route::get('/french', function () {
    return view('french');
});

Route::get('/spanish', function () {
    return view('spanish');
});

Route::get('/turkish', function () {
    return view('turkish');
});

Route::get('/russian', function () {
    return view('russian');
});

Route::get('dashboard', [AuthorizationController::class, 'dashboard']); 
Route::get('login', [AuthorizationController::class, 'index'])->name('login');
Route::post('custom-login', [AuthorizationController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthorizationController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthorizationController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthorizationController::class, 'signOut'])->name('signout');