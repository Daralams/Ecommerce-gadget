@extends('layouts.main')
@section('sign')
<div class="row justify-content-center">
 <div class="col-md-6 col-12">
  <div class="d-flex justify-content-center" id="sign-ilustrasi">
       <img src="assets/ui/ilustrasi-sign-form.png">
    </div>
  <div class="card border-info bg-dark p-3">
    <form method="post" action="/sign-up">
     @csrf
      <div class="d-flex justify-content-between pt-4">
        <p class="fs-5 text-info fw-bold">Sign Up</p>
        <a href="/sign-in" class="text-decoration-none fs-6 text-info">Sign In</a>
      </div>
  <div class="mt-4 mb-3 text-info">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input type="text" name="firstname" class="form-control bg-transparent border-info text-info @error('firstname') is-invalid @enderror" value="{{old('firstname')}}">
    @error('firstname')
    <div class="invalid-feedback">
        {{$message}}
    </div>
    @enderror
  </div>
  <div class="mt-4 mb-3 text-info">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input type="text" name="lastname" class="form-control bg-transparent border-info text-info @error('lastname') is-invalid @enderror" value="{{old('lastname')}}">
     @error('lastname')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
  </div>
  <div class="mt-4 mb-3 text-info">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <select name="gender" class="form-select bg-transparent border-info text-info" value="{{old('gender')}}">
      <option value="male" >Male</option>
      <option value="female">Female</option>
   </select>
  </div>
  <div class="mt-4 mb-3 text-info">
    <label for="exampleInputEmail1" class="form-label">Country</label>
    <input type="text" name="country" class="form-control bg-transparent border-info text-info @error('country') is-invalid @enderror" value="{{old('country')}}">
    @error('country')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="mb-3 text-info">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control bg-transparent border-info text-info @error('email') is-invalid @enderror" value="{{old('email')}}">
    @error('email')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="mb-3 text-info">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control bg-transparent border-info text-info @error('password') is-invalid @enderror">
    @error('password')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <div class="mb-3 text-info">
    <label for="exampleInputPassword1" class="form-label">Phone Number</label>
    <input type="number" name="phone_number" class="form-control bg-transparent border-info text-info @error('phone_number') is-invalid @enderror" value="{{old('phone_number')}}">
    @error('phone_number')
      <div class="invalid-feedback">
        {{$message}}
      </div>
     @enderror
  </div>
  <div class="mb-3 text-info">
    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
    <textarea name="address" class="form-control bg-transparent border-info text-info @error('address') is-invalid @enderror" rows="3">{{old('address')}}</textarea>
    @error('address')
      <div class="invalid-feedback">
        {{$message}}
      </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-info w-100">Sign Up</button>
</form>
  </div>

</div>
</div>
@endsection