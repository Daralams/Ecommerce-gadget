@extends('admin.manage-product.layouts.main')
@section('container')
  <main>
    <div class="py-5 text-center">
      <h2>Add Product form</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Product</h4>
        <form method="post" action="/addProduct" enctype="multipart/form-data">
          @csrf
          <div class="row g-3 mb-3">
           <div class="col-sm-6">
              <label for="brand" class="form-label">Brand</label>
              <select class="form-select" name="id_merk" required>
                @foreach($kategoriMerk as $merk)
                <option value="{{$merk->id}}">{{$merk->merk}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
              </div>
            </div>
            
           <div class="col-sm-6">
              <label for="varian-brand" class="form-label">Varian</label>
              <select class="form-select" name="varian" required>
                <option value="Ram 8 Gb ">Ram 8 Gb </option>
                <option value="Ram 16 Gb ">Ram 16 Gb </option>
                <option value="Ram 32 Gb ">Ram 32 Gb </option>
              </select>
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="type-laptop" class="form-label">Type</label>
              <input type="text" class="form-control" name="tipe_laptop" required value="{{old('tipe_laptop')}}">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-sm-6">
              <label for="slug" class="form-label">Current type</label>
              <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" required value="{{old('slug')}}">
             @error('slug')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="col-12">
              <label for="spesification" class="form-label">Detail Spesification</label>
             <div class="form-floating">
               <textarea name="detail_product" class="form-control" placeholder="write a Spesification here" id="floatingTextarea2" style="height: 100px">{{old('detail_product')}}</textarea>
              <label for="floatingTextarea2">Spesification</label>
              <div class="invalid-feedback">
                </div>
              </div>
            </div>
            
          <div class="row g-3">
            <div class="col-md-6">
              <label for="price" class="form-label">Price</label>
              <input type="number" name="harga" class="form-control" value="{{old('harga')}}">
              <div class="invalid-feedback">
              </div>
            </div>

            <div class="col-md-6">
              <label for="stock" class="form-label">Stock</label>
              <input type="number" name="stok" class="form-control" required value="{{old('stok')}}">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
      
           <div class="col-md-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Select image</label>
                <input name="gambar" class="form-control  @error('gambar') is-invalid @enderror" type="file" id="gambar">
                @error('gambar')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Add Product</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2024 Tech<span class="text-info">Titan</span></p>
  </footer>
@endsection