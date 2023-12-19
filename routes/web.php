<?php

use Illuminate\Support\Facades\Route;
use JeroenNoten\LaravelAdminLte\Http\Controllers\DarkModeController;

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
    return view('dashboard');
});

Route::get('pemasukan', function() { 
    return view('slidebar.pemasukan');
    
});
Route::get('pengeluaran', function() { 
    return view('slidebar.pengeluaran');
});
Route::get('daftarbelanja', function() { 
    return view('slidebar.daftarbelanja');
});
Route::get('tables', function() { 
    return view('slidebar.tables');
});
