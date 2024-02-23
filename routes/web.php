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
use App\Http\Controllers\OrdersController;
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
//Route products 
Route::get('/dashboard-admin/products', [AdminController::class, 'showproducts'])->middleware('auth');
Route::get('/dashboard-admin/addProduct', [AdminController::class, 'createNewProduct'])->middleware('auth');
Route::post('/addProduct', [AdminController::class, 'storeProduct']);
Route::get('/dashboard-admin/{product:slug}/editProduct', [AdminController::class, 'editProduct'])->middleware('auth');
Route::put('/editProduct/{product:slug}', [AdminController::class, 'storeProductEdited']);
Route::delete('/dashboard-admin/{product:id}', [AdminController::class, 'deleteProduct']);
//Route brand
Route::get('/dashboard-admin/brand', [AdminController::class, 'showbrand']);
Route::get('/dashboard-admin/brand/addNewBrand', [AdminController::class, 'createbrand']);
Route::post('/dashboard-admin/brand/addNewBrand', [AdminController::class, 'storebrand']);
Route::get('/dashboard-admin/brand/{merk:slug}/editBrand', [AdminController::class, 'editbrand']);
Route::put('/dashboard-admin/brand/{merk:slug}/editBrand', [AdminController::class, 'storeBrandEdited']);
//Route orders 
Route::get('/dashboard-admin/orders', [AdminController::class, 'orders'])->middleware('auth');
Route::put('/dashboard-admin/orders/{order:id}', [AdminController::class, 'accOrders']);

//Route customers 
Route::get('/dashboard-admin/customers', [AdminController::class, 'customers'])->middleware('auth');

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

// Route transaction
Route::get('/orders/{product:slug}', [OrdersController::class, 'orderView']);
Route::post('/orders', [OrdersController::class, 'storeOrder']);


Route::get('/contact', [RoutesController::class, 'contact']);
