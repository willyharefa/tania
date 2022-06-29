<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\DashboardController;

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


// page

Route::get('/', [PageController::class, 'index'])->middleware('auth')->name('home');
Route::get('/page/item', [PageController::class, 'page_item']);
Route::get('/page/grooming', [PageController::class, 'page_grooming']);
Route::post('/page/grooming', [PageController::class, 'page_booking']);

// dashboard

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// item

Route::get('/item', [ItemController::class, 'index']);
Route::get('/item/form', [ItemController::class, 'form']);
Route::post('/item', [ItemController::class, 'store']);
Route::get('/item/delete/{item}', [ItemController::class, 'destroy']);
Route::get('/item/edit/{item}', [ItemController::class, 'edit']);
Route::put('/item', [ItemController::class, 'update']);


// pesan

Route::post('/pesan', [PesanController::class, 'store']);
Route::get('/pesanan', [PesanController::class, 'index']);
Route::get('/pesanan/selesai/{pesan}', [PesanController::class, 'selesai']);
Route::get('/pesanan/lihat/{user_id}', [PesanController::class, 'lihat']);
Route::get('/pesanan/transaksi', [PesanController::class, 'transaksi']);
Route::get('/pesan/laporan/{tm}', [PesanController::class, 'detail_transaksi']);


Route::get('/login', [Controller::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::post('/authenticate', [Controller::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/register', [Controller::class, 'register'])->name('register')->middleware('guest');
Route::post('/create-account', [Controller::class, 'createAccount'])->name('create_account')->middleware('guest');

// grooming

Route::post('/grooming', [GroomingController::class, 'store']);
Route::get('/grooming', [GroomingController::class, 'index']);
Route::get('/grooming/selesai/{grooming}', [GroomingController::class, 'selesai']);
Route::get('/grooming/lihat/{user_id}', [GroomingController::class, 'lihat']);
Route::get('/grooming/transaksi', [GroomingController::class, 'transaksi']);
Route::get('/grooming/laporan/{tm}', [GroomingController::class, 'detail_transaksi']);

Route::get('/admin', function()
{
    User::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin'),
        'role' => 1,
    ]);
});