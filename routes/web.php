<?php

use App\Http\Controllers\MenuMakanan;
use App\Http\Controllers\MenuPromosi;
use Illuminate\Support\Facades\Route;

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
//     return view('web.index');
// });

Route::get('/', [MenuPromosi::class, 'indexPublic'])->name('Home');

Route::get('/menu_makanan_public', [MenuMakanan::class, 'indexPublick_MenuMakanan'])->name('MenuMakananPublic');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/menu_promosi', [MenuPromosi::class, 'index'])->middleware('auth')->name('DetailMenuPromosi');
Route::post('/add_pomosi', [MenuPromosi::class, 'create'])->middleware('auth')->name('TambahMenuPromosi');
Route::delete('/deteled_pomosi{id}', [MenuPromosi::class, 'destroy'])->middleware('auth')->name('DeteleMenuPromosi');


Route::get('/menu_makanan', [MenuMakanan::class, 'index'])->middleware('auth')->name('DetailMenuMakanan');
Route::post('/add_makanan', [MenuMakanan::class, 'create'])->middleware('auth')->name('TambahMenuMakanan');
Route::delete('/deteled_makanan{id}', [MenuMakanan::class, 'destroy'])->middleware('auth')->name('DeteledMenuMakanan');
