@extends('admin.manage-product.layouts.main')
@section('container')
<main>
    <div class="py-5 text-center">
      <h2>Edit Brand form</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Brand</h4>
        <form method="post" action="/dashboard-admin/brand/{{$kategoriMerk->slug}}/editBrand">
          @csrf
          @method('put')
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="Brand" class="form-label">Brand</label>
              <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{$kategoriMerk->merk}}" required>

            </div>

            <div class="col-sm-6">
              <label for="slug" class="form-label">Current Brand</label>
              <input type="text" name="slug" class="form-control  @error('slug') is-invalid @enderror" value="{{$kategoriMerk->slug}}" required>
             @error('slug')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Edit Brand</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-body-secondary text-center text-small">
    <p class="mb-1">&copy; 2024 Tech<span class="text-info">Titan</span></p>
  </footer>
@endsection