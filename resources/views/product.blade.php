@extends('layouts.main')
@section('container')

<div class="container">
  <h1 class="mb-4">Detail Product</h1>
      <div class="card m-2 w-full">
        <img src="{{$product->gambar}}" class="card-img-top" alt="{{$product->gambar}}">
        <div class="card-body">
          <h5 class="card-title">
              Tipe Laptop : {{$product->tipe_laptop}}
            </h5>
          <p class="card-text">Merk laptop : {{$product->kategoriMerk->merk}}</p>
          <p class="card-text">Varian : {{$product->varian}}</p>
          <p class="card-text">Harga : {{$product->harga}}</p>
          <p class="card-text">Detail product : {{$product->detail_product}}</p>
          <p class="card-text">Stok : {{$product->stok}}</p>
          <p class="card-text">Publised at : {{$product->created_at}}</p>
          <a href="/payment" class="btn btn-success">Beli</a>
          <a href="/products" class="btn btn-primary">Back</a>
          </div>
        </div>
</div>

@endsection