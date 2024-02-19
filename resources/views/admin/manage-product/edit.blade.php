@extends('admin.manage-product.layouts.main')
@section('container')
 <main>
    <div class="py-5 text-center">
      <h2>Edit Product form</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Product</h4>
        <form method="post" action="/editProduct/{{$product->slug}}">
          @method('put')
          @csrf
          <div class="row g-3 mb-3">
           <div class="col-sm-6">
              <label for="brand" class="form-label">Brand</label>
              <select class="form-select" name="id_merk" required>
              @foreach($kategoriMerk as $merk)
              <option value="{{$merk->id}}" @if($merk->id == $product->id_merk) selected @endif>{{$merk->merk}}</option>
              @endforeach
            </select>

              <div class="invalid-feedback">
              </div>
            </div>
            
           <div class="col-sm-6">
              <label for="varian-brand" class="form-label">Varian</label>
              <select class="form-select" name="varian" required>
                <option value="Ram 8 Gb" @if($product->varian == "Ram 8 Gb") selected @endif>Ram 8 Gb</option>
                <option value="Ram 16 Gb" @if($product->varian == "Ram 16 Gb") selected @endif>Ram 16 Gb</option>
                <option value="Ram 32 Gb" @if($product->varian == "Ram 32 Gb") selected @endif>Ram 32 Gb</option>
                </select>

              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="type-laptop" class="form-label">Type</label>
              <input type="text" class="form-control" name="tipe_laptop" value="{{$product->tipe_laptop}}" required>
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-sm-6">
              <label for="slug" class="form-label">Current type</label>
              <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{$product->slug}}" required>
             @error('slug')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="col-12">
              <label for="spesification" class="form-label">Detail Spesification</label>
             <div class="form-floating">
               <textarea name="detail_product" class="form-control" placeholder="write a Spesification here" id="floatingTextarea2" style="height: 100px">{{$product->detail_product}}</textarea>
              <label for="floatingTextarea2">Spesification</label>
              <div class="invalid-feedback">
                </div>
              </div>
            </div>
            
          <div class="row g-3">
            <div class="col-md-6">
              <label for="price" class="form-label">Price</label>
              <input type="number" name="harga" class="form-control" value="{{$product->harga}}">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-6">
              <label for="stock" class="form-label">Stock</label>
              <input type="number" name="stok" class="form-control" value="{{$product->stok}}" required>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          
           <!-- Gambar 
           <div class="col-md-6">
              <label for="zip" class="form-label">Picture</label>
              <input type="text" name="gambar" class="form-control" value="{{$product->gambar}}" required>
              <div class="invalid-feedback">
              </div>
            </div>
          </div> -->

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Edit Product</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2024 Tech<span class="text-info">Titan</span></p>
  </footer>
@endsection