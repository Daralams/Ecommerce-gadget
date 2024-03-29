@extends('layouts.main')
@section('container')

<div class="container pb-4">
  <h2 class="py-4 fs-2 text-light text-center">Detail Product</h2>
      <div class="card border-info bg-dark m-2 w-full">
        <img src="{{asset('storage/' . $product->gambar)}}" alt="pic">
        <div class="card-body text-light">
          <h5 class="card-title">
              Laptop type : {{$product->tipe_laptop}}
            </h5>
          <p class="card-text">Brand : {{$product->kategoriMerk->merk}}</p>
          <p class="card-text">Option : {{$product->varian}}</p>
          <p class="card-text">Harga : Rp {{$product->harga}}</p>
          <p class="card-text">Detail product : {{$product->detail_product}}</p>
          <p class="card-text">Quantity : {{$product->stok}}</p>
          <p class="card-text">Publised at : {{$product->created_at->diffForHumans()}}</p>
          <a href="/products" class="btn btn-info">Back</a>
          <a href="/orders/{{$product->slug}}" class="btn btn-outline-info"><i class="fa-solid fa-cart-shopping"></i>&nbsp; Buy Now</a>
          </div>
        </div>
</div>

@endsection