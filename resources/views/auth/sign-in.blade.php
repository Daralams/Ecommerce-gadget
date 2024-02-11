@extends('layouts.main')
@section('sign')
<div class="row justify-content-center">
  
  @if(session()->has('success'))
   <div class="alert alert-info alert-dismissible fade show mt-3 mx-4" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  
  @if(session()->has('signInError'))
   <div class="alert alert-danger alert-dismissible fade show mt-3 mx-4" role="alert">
      {{session('signInError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  
 <div class="col-md-6 col-12">
  <div class="d-flex justify-content-center" id="sign-ilustrasi">
       <img src="assets/ui/ilustrasi-sign-form.png">
    </div>
  <div class="card border-info bg-dark p-3">
    <form method="post" action="/sign-in">
      @csrf
      <div class="d-flex justify-content-between pt-4">
        <p class="fs-5 text-info fw-bold">Sign In</p>
        <a href="/sign-up" class="text-decoration-none fs-6 text-info">Sign Up</a>
      </div>
  <div class="mt-4 mb-3 text-info">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control bg-transparent border-info text-info @error('email') is-invalid @enderror" value="{{old('email')}}">
    @error('email')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
    
  <div class="mb-3 text-info">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control bg-transparent border-info text-light @error('password') is-invalid @enderror">
    @error('password')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>
  <div class="mb-3 form-check text-info">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-info w-100">Sign In</button>
  <small class="pt-2 text-info d-block text-center">Don't have an account yet? <a href="/sign-up" class="text-info fw-bold">Sign Up</a></small>
</form>
  </div>

</div>
</div>
@endsection