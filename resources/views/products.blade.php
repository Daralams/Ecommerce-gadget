@extends('layouts.main')
@section('container')

  <h1 class="mb-4 text-center">Our product</h1>
  <div class="d-flex justify-content-center flex-wrap gap-3">
    @foreach($kategoriMerk as $kategori)
    <a href="/merk/{{$kategori->slug}}" type="button" class="btn btn-outline-primary">{{$kategori->merk}}</a>
    @endforeach
  </div>
    <div class="d-flex flex-wrap justify-content-center mt-4">
      @foreach($product as $item)
      <div class="card m-2" style="width: 18rem;">
        <img src="{{$item->gambar}}" class="card-img-top" alt="{{$item->gambar}}">
        <div class="card-body">
          <h5 class="card-title">
              {{$item->tipe_laptop}}</h5>
          <h6 class="card-text">{{$item->kategoriMerk->merk}}</h6>
          <p class="card-text">{{$item->harga}}</p>
          <!-- <p class="card-text">{{$item->rating}}</p> -->
          <a href="/products/{{$item->slug}}" class="btn btn-primary">Detail product</a>
          </div>
        </div>
         @endforeach
    </div>
@endsection