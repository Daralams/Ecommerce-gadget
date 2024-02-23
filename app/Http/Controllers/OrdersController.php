<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function orderView (Products $product) {
      return view ('orders.userOrder', [
        "title" => "Order",
        "product" => $product
        ]);
    }
    
    public function storeOrder(Request $request) {
      $validated = $request->validate([
        'fullname' => ['required'],
        'phone' => ['required'],
        'harga' => ['required'],
        'dibayar' => ['required'],
        'jml_order' => ['required'],
        'status' => ['required']
        ]);
       Orders::create($validated);
       $request->session()->flash('success', 'Order successfully');
       return redirect('/products');
    }
}
