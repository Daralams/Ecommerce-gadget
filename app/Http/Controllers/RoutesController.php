<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// connect to model
use App\Models\Products;
use App\Models\KategoriMerk;

class RoutesController extends Controller
{
  
  public function landingPage () {
    return view('pages.welcome', [
      "title" => "Home",
      "kategoriMerk" => KategoriMerk::all()
      ]);
  }
   
   public function products () {
     
     return view('products.products', [
      "title" => "Products",
      "product" => Products::latest()->searching()->paginate(4)->withQueryString(),
      "kategoriMerk" => KategoriMerk::all()
    ]);
   }
   
   public function product (Products $product) {
     return view('products.product', [
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
