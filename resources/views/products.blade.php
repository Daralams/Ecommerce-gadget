@extends('layouts.main')
@section('container')

  <h2 class="fs-2 pt-4 text-center text-light">Our product</h2>
  <p class="fs-4 text-secondary text-center">Choose the brand you want</p>
  
  <div class="d-flex justify-content-center flex-wrap gap-3">
    @foreach($kategoriMerk as $kategori)
    <a href="/product/{{$kategori->slug}}" type="button" class="btn btn-outline-info">{{$kategori->merk}}</a>
    @endforeach
  </div>
    <div class="d-flex flex-wrap justify-content-center py-4">
      @foreach($product as $item)
      <div class="card border-info m-2 bg-dark bg-gradient" style="width: 18rem;">
        <img src="{{$item->gambar}}" class="card-img-top" alt="{{$item->gambar}}">
        <div class="card-body text-light">
          <h5 class="card-title">
              {{$item->tipe_laptop}}</h5>
          <h6 class="card-text">{{$item->kategoriMerk->merk}}</h6>
          <p class="card-text">Rp {{$item->harga}}</p>
          <a href="/products/{{$item->slug}}" class="btn btn-outline-info">Detail product</a>
          <a href="/products/cart" class="btn btn-outline-info"><i class="fa-solid fa-cart-shopping"></i></a>
          </div>
        </div>
         @endforeach
    </div>
@endsection