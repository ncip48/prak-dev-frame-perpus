<?php

use App\Http\Controllers\RakBukuController;
use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('biodata', 'biodata');

Route::get('/buku', function () {
    $data = [];
    $data['poin'] = 83;
    $data['flag'] = '2';
    $data['sub_judul'] = 'latihan parsing data di view';
    $data['buku'] = ['buku 1', 'buku 2', 'buku 3', 'buku 4', 'buku 5'];
    return view('buku/list', $data);
});

Route::resource('rak_buku', RakBukuController::class);

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::post('/rak_buku/ajax_store', [
    RakBukuController::class,
    'store_ajax'
]);
