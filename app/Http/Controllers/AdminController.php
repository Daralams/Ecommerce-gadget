<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\KategoriMerk;

class AdminController extends Controller
{
    public function adminRoute() {
      return view('admin.dashboard.index', [
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
        'gambar' => ['required'],
        'tipe_laptop' => ['required'],
        'slug' => ['required', 'unique:products'],
        'varian' => ['required'],
        'harga' => ['required'],
        'detail_product' => ['required'],
        'stok' => ['required']
        ]);
        
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
          'gambar' => ['required'],
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
}
