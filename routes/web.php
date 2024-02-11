<?php

use Illuminate\Support\Facades\Route;
// connect to models
use App\Models\Products;
use App\Models\KategoriMerk;
// connect to controllers
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
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


// auth
Route::get('/sign-in', [SignInController::class, 'signIn']);
Route::get('/sign-up', [SignUpController::class, 'signUp']);
Route::post('/sign-up', [SignUpController::class, 'store']);

// Routes menggunakan closures
Route::get('/', function() {
  return view('home', [
      "title" => "Home",
      "kategoriMerk" => KategoriMerk::all()
      ]);
});

//routes menggunakan controller
Route::get('/products', [RoutesController::class, 'products']);
// halaman detail product
Route::get('/products/{product:slug}', [RoutesController::class, 'product']);

Route::get('/product/{kategori:slug}', function(KategoriMerk $kategori) {
  return view('merk', [
    "title" => $kategori->merk,
    "product" => $kategori->products,
    "merk" => $kategori->merk
    ]);
}); 
Route::get('/products/{kategori:slug}', [RoutesController::class, 'brand']);


Route::get('/contact', [RoutesController::class, 'contact']);
