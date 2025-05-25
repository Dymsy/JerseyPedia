<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\History;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Keranjang;
use App\Http\Livewire\ProductLiga;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductDetail;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', Home::class)->name('livewire.home');
Route::get('/products', ProductIndex::class)->name('livewire.product-index');
Route::get('/products/liga/{ligaId}', ProductLiga::class)->name('livewire.product-liga');
Route::get('/products/{id}', ProductDetail::class)->name('livewire.product-detail');
Route::get('/keranjang', Keranjang::class)->name('livewire.keranjang');
Route::get('/checkout', Checkout::class)->name('livewire.checkout');
Route::get('/history', History::class)->name('livewire.history');
