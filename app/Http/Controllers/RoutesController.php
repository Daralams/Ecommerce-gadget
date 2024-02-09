<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// connect to model
use App\Models\Products;
use App\Models\KategoriMerk;

class RoutesController extends Controller
{
   
   public function products () {
     
     $product = Products::latest();
     
     if(request('search')) {
       $product->where('tipe_laptop', 'like', '%'. request('search'). '%');
     }
     
     return view('products', [
      "title" => "Products",
      "product" => $product->get(),
      "kategoriMerk" => KategoriMerk::all()
    ]);
   }
   
   public function product (Products $product) {
     return view('product', [
      "title" => "Detail Product",
      "product" => $product
    ]);
   }
   
   public function contact () {
     return view('partials/footer', [
      "title" => "Contact",
      "kategoriMerk" => KategoriMerk::all()
    ]);
   }
   
}
