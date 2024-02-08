@extends('layouts.main')
@section('container')

  <h1 class="pt-4 text-center text-light">Brand : {{$merk}}</h1>
    <div class="d-flex flex-wrap justify-content-center py-4">
      @foreach($product as $item)
      <div class="card border-info bg-dark m-2" style="width: 18rem;">
        <img src="{{$item->gambar}}" class="card-img-top" alt="{{$item->gambar}}">
        <div class="card-body text-light">
          <h5 class="card-title">
              {{$item->tipe_laptop}}</h5>
          <h6 class="card-text">{{$item->kategoriMerk->merk}}</h6>
          <p class="card-text">Rp {{$item->harga}}</p>
          <!-- <p class="card-text">{{$item->rating}}</p> -->
          <a href="/products/{{$item->slug}}" class="btn btn-outline-info">Detail product</a>
          </div>
        </div>
         @endforeach
    </div>
@endsection