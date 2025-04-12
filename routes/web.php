<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\RoutingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Admin
use App\Http\Controllers\Admin\UserController;

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
// require __DIR__ . '/auth.php';

// Auth routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Hanya warga yang bisa register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Halaman Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
    // tambahkan route lain khusus admin di sini

    Route::get('/admin/manajemen-pengguna', [UserController::class, 'index'])->name('manajemen-pengguna.index');
    Route::post('/admin/manajemen-pengguna', [UserController::class, 'store'])->name('manajemen-pengguna.store');
    Route::get('/admin/manajemen-pengguna/{id}/edit', [UserController::class, 'edit'])->name('manajemen-pengguna.edit');
    Route::put('/admin/manajemen-pengguna/{id}', [UserController::class, 'update'])->name('manajemen-pengguna.update');   
    Route::delete('/admin/manajemen-pengguna/{id}', [UserController::class, 'destroy'])->name('manajemen-pengguna.destroy'); 
});

// Halaman Warga
Route::middleware(['auth', 'role:warga'])->group(function () {
    Route::get('/warga/dashboard', fn() => view('warga.dashboard'))->name('warga.dashboard');
    // tambahkan route lain khusus warga di sini

    Route::get('/warga/administrasi', fn () => view('warga.administrasi.index'))->name('warga.administrasi.index');
});

// Route::group(['prefix' => '/'], function () {
//     Route::get('', [RoutingController::class, 'index'])->name('root');
//     Route::get('/home', fn()=>view('index'))->name('home');
//     Route::get('{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
//     Route::get('{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
//     Route::get('{any}', [RoutingController::class, 'root'])->name('any');
// });

