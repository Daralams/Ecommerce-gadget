@extends('layouts.main')
@section('sign')
<div class="row justify-content-center">
 <div class="col-md-6 col-12">
  <div class="d-flex justify-content-center" id="sign-ilustrasi">
       <img src="assets/ui/ilustrasi-sign-form.png">
    </div>
  <div class="card border-info bg-dark p-3">
    <form method="post" action="/orders">
     @csrf
      <div class="text-center">
        <p class="fs-5 text-info fw-bold">Orders</p>
      </div>
      <div class="mt-4 mb-3 text-info">
    <label for="fullname" class="form-label">Full Name</label>
    <input type="text" name="fullname" class="form-control bg-transparent border-info text-info" required>
  </div>
      <div class="mb-3 text-info">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="number" name="phone" class="form-control bg-transparent border-info text-info" required>
  </div>
      <div class="mt-4 mb-3 text-info">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input type="text" name="product_name" class="form-control bg-transparent border-info text-info" value="{{$product->tipe_laptop}}" readonly>
  </div>
      <div class="mt-4 mb-3 text-info">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="harga" class="form-control bg-transparent border-info text-info" value="{{$product->harga}}" readonly>
  </div>
      <div class="mt-4 mb-3 text-info">
    <label for="price" class="form-label">Dibayar</label>
    <input type="number" name="dibayar" class="form-control bg-transparent border-info text-info">
  </div>
      <div class="mb-3 text-info">
    <label for="Quantity" class="form-label">Quantity</label>
    <input type="number" name="jml_order" class="form-control bg-transparent border-info text-info" required>
    <input type="hidden" name="status" class="form-control bg-transparent border-info text-info" value="pending">
    <input type="hidden" name="id_product" class="form-control bg-transparent border-info text-info" value="{{$product->id}}">
  </div>
      <button type="submit" class="btn btn-info w-100">Checkout</button>
    </form>
  </div>

</div>
</div>
@endsection