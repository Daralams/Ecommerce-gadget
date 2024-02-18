<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\KategoriMerk;
use App\Models\User;

class AdminController extends Controller
{
  // All dashboard function
    public function dashboard() {
      return view('admin.dashboard.dashboard', [
        "title" => "Dashboard | Admin",
        "product" => Products::all(),
        "kategoriMerk" => KategoriMerk::all()
        ]);
    }
    
    public function createNewProduct() {
      return view('admin.manage-product.create', [
        "title" => "Create New Product | Admin",
        "kategoriMerk" => KategoriMerk::all()
        ]);
    }
    
    public function storeProduct(Request $request) {
      
      $validated = $request->validate([
        'id_merk' => ['required'],
        'gambar' => ['required', 'image', 'file', 'max:1024'],
        'tipe_laptop' => ['required'],
        'slug' => ['required', 'unique:products'],
        'varian' => ['required'],
        'harga' => ['required'],
        'detail_product' => ['required'],
        'stok' => ['required']
        ]);
        
       $request->file('gambar')->store('post-images');
        
       Products::create($validated);
       $request->session()->flash('success', 'Product added successfully');
       return redirect('/dashboard-admin');
       }
       
       public function editProduct(Products $product) {
         return view('admin.manage-product.edit', [
           "title" => "Edit product",
           "product" => $product,
           "kategoriMerk" => KategoriMerk::all()
           ]);
       }
       
        public function storeProductEdited (Request $request, Products $product) {
         $validated = $request->validate([
          'id_merk' => ['required'],
          'tipe_laptop' => ['required'],
          'slug' => ['required', 'unique:products'],
           'varian' => ['required'],
           'harga' => ['required'],
           'detail_product' => ['required'],
           'stok' => ['required']
        ]);
        Products::where('id', $product->id)->update($validated);
        return redirect('/dashboard-admin')->with('success', 'Product updated successfully');
       }

       
       public function deleteProduct (Products $product) {
         Products::destroy($product->id);
         return redirect('/dashboard-admin')->with('success', 'Products has been deleted!');
       }
       
       // All orders function 
       public function orders() {
         return view('admin.dashboard.orders', [
           "title" => "Page Orders"
           ]);
       }
       
       //All Customers function 
       public function customers () {
         return view ('admin.dashboard.customers', [
           "title" => "Page Customers",
           "users" => User::all()
           ]);
       }
}
