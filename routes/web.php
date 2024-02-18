<?php

use Illuminate\Support\Facades\Route;
// connect to models
use App\Models\Products;
use App\Models\KategoriMerk;
// connect to controllers
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignInAdminController;
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


// auth users
Route::get('/sign-in', [SignInController::class, 'signIn'])->name('login')->middleware('guest');
Route::post('/sign-in', [SignInController::class, 'authenticate']);
Route::post('/sign-out', [SignInController::class, 'signOut']);
Route::get('/sign-up', [SignUpController::class, 'signUp'])->middleware('guest');
Route::post('/sign-up', [SignUpController::class, 'store']);

// admin 
Route::get('/admin-sign-in', [SignInAdminController::class, 'signInView'])->name('login')->middleware('guest');
Route::post('/admin-sign-in', [SignInAdminController::class, 'authenticate']);
Route::post('/admin-sign-out', [SignInAdminController::class, 'signOut']);
// Route dashboard 
Route::get('/dashboard-admin', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/dashboard-admin/addProduct', [AdminController::class, 'createNewProduct']);
Route::post('/addProduct', [AdminController::class, 'storeProduct']);
Route::get('/dashboard-admin/{product:slug}/editProduct', [AdminController::class, 'editProduct']);
Route::put('/editProduct/{product:slug}', [AdminController::class, 'storeProductEdited']);
Route::delete('/dashboard-admin/{product:id}', [AdminController::class, 'deleteProduct']);
//Route orders 
Route::get('/dashboard-admin/orders', [AdminController::class, 'orders']);
//Route customers 
Route::get('/dashboard-admin/customers', [AdminController::class, 'customers']);

//Routes landing page
Route::get('/', [RoutesController::class, 'landingPage']);
//Routes product
Route::get('/products', [RoutesController::class, 'products']);
// Routes detail product
Route::get('/products/{product:slug}', [RoutesController::class, 'product'])->middleware('auth');

Route::get('/product/{kategori:slug}', function(KategoriMerk $kategori) {
  return view('products.merk', [
    "title" => $kategori->merk,
    "product" => $kategori->products,
    "merk" => $kategori->merk
    ]);
}); 
//Route::get('/products/{kategori:slug}', [RoutesController::class, 'brand']);


Route::get('/contact', [RoutesController::class, 'contact']);
