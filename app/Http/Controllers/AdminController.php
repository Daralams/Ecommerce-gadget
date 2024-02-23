<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\KategoriMerk;
use App\Models\User;
use App\Models\Orders;

class AdminController extends Controller
{
  // All dashboard function
    public function dashboard() {
      return view('admin.dashboard.dashboard', [
        "title" => "Dashboard | Admin",
        ]);
    }
    
    public function showproducts() {
      return view('admin.manage-product.showproducts', [
        "title" => "Products",
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
       return redirect('/dashboard-admin/products');
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
        return redirect('/dashboard-admin/products')->with('success', 'Product updated successfully');
       }

       
       public function deleteProduct (Products $product) {
         Products::destroy($product->id);
         return redirect('/dashboard-admin/products')->with('success', 'Products has been deleted!');
       }
       
       // All Brand / kategori merk controller
       public function showbrand() {
         return view('admin.manage-product.showbrand', [
           "title" => "Brand",
           "kategoriMerk" => KategoriMerk::all()
           ]);
       }
       
       public function createbrand() {
         return view('admin.manage-product.createbrand', [
           "title" => "Brand || Create brand"
           ]);
       }
       
       public function storebrand(Request $request) {
         $validated = $request->validate([
           "merk" => ["required", "unique:kategori_merks"],
           "slug" => ["required", "unique:kategori_merks"]
           ]);
           
           KategoriMerk::create($validated);
           $request->session()->flash('success', 'Brand added successfully');
           return redirect('/dashboard-admin/brand');
       }
       
       public function editbrand(KategoriMerk $kategoriMerk) {
         return view('admin.manage-product.editbrand', [
           "title" => "Edit brand",
           "kategoriMerk" => $kategoriMerk,
           ]);
       }
       
       
       public function storeBrandEdited(Request $request, KategoriMerk $kategoriMerk) {
         
         $validated = $request->validate([
           "merk" => ["required", "unique:kategori_merks"],
           "slug" => ["required", "unique:kategori_merks"]
           ]);
           
           KategoriMerk::where('id', $kategoriMerk->id)->update($validated);
           return redirect('/dashboard-admin/brand')->with('success', 'Brand updated successfully');
       }
       
       // All orders function 
       public function orders() {
         return view('admin.dashboard.orders', [
           "title" => "Page Orders",
           "orders" => Orders::all()
           ]);
       }
       
       public function accOrders(Orders $order) {
         Orders::where('id', $order->id)->update(['status' => 'dikonfirmasi']);
         return redirect()->back()->with('success', 'Order confirmed successfully.');
       }
       
       //All Customers function 
       public function customers () {
         return view ('admin.dashboard.customers', [
           "title" => "Page Customers",
           "users" => User::all()
           ]);
       }
}
