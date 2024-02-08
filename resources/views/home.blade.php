@extends('layouts.landingPage')
  @section('hero-section')
  <div class="w-100">
    <div class="mt-5 mb-5">
        <h2 class="fs-3 text-white mb-3">Cutting-edge Tech, Contemporary Style. Discover Your Dream Laptop at TechTitan</h2>
        <p class="fs-5 text-white mb-4">Explore the world of technology with the latest in laptops and trendy designs. Tech<span class="text-info">Titan</span> offers an unforgettable online shopping experience. Find your dream laptop now!</p>
        <a href="/products" class="btn btn-outline-info">Shop now</a>
        <a href="#welcome-section" class="btn btn-info ml-2">Learn More</a>
    </div>
  </div>
  @endsection
  
  @section('welcome-section')
  <div class="d-flex gap-4" id="welcome-section">
    <div class="w-50 rounded" id="img-fluid">
      <img src="assets/section2.jpeg" class="w-100 rounded" alt="welcome">
    </div>
    
    <div class="p-2 w-50" id="welcome-caption">
      <h2 class="fs-3 text-light text-gradient mb-3">Welcome to Tech<span class="text-info">Titan</span></h2>
      <p class="text-light text-gradient mb-3">🚀 Discover Your Dream Laptop: At Tech<span class="text-info">Titan</span>, you're not just shopping, but also exploring and finding your dream laptop that suits your needs and desires.</p>
      <a href="/contact" class="btn btn-dark bg-gradient border-info ">contact us</a>
    </div>
  </div>
  
  <!-- Our product section -->
  <div class="my-5">
    <h2 class="fs-2 text-white text-gradient text-center">Our product</h2>
    
    <div class="mt-4 d-flex flex-wrap gap-3 justify-content-center">
      
      <div class="card border-info mb-3 bg-dark bg-gradient" style="max-width: 18rem;" id="card-size">
        <div class="card-body text-light text-center">
        <h5 class="card-title">{{$kategoriMerk[0]->merk}}</h5>
        <div class="height-img">
          <img src="assets/asus.jpg" alt="{{$kategoriMerk[0]->merk}}" ><br>
        </div>
        <a href="/product/{{$kategoriMerk[0]->slug}}" class="btn btn-outline-info mt-3">See More</a>
        </div>
      </div>
      <div class="card border-info mb-3 bg-dark bg-gradient" style="max-width: 18rem;" id="card-size">
        <div class="card-body text-light text-center">
        <h5 class="card-title">{{$kategoriMerk[1]->merk}}</h5>
        <div class="height-img">
          <img src="assets/acer.png" alt="{{$kategoriMerk[1]->merk}}"><br>
        </div>
        
        <a href="/product/{{$kategoriMerk[1]->slug}}" class="btn btn-outline-info mt-3">See More</a>
        </div>
      </div>
      <div class="card border-info mb-3 bg-dark bg-gradient" style="max-width: 18rem;" id="card-size">
        <div class="card-body text-light text-center">
        <h5 class="card-title">{{$kategoriMerk[2]->merk}}</h5>
        <div class="height-img">
          <img src="assets/lenovo.jpg" alt="{{$kategoriMerk[2]->merk}}"><br>
        </div>
        
        <a href="/product/{{$kategoriMerk[2]->slug}}" class="btn btn-outline-info mt-3">See More</a>
        </div>
      </div>
      <div class="card border-info mb-3 bg-dark bg-gradient" style="max-width: 18rem;" id="card-size">
        <div class="card-body text-light text-center">
        <h5 class="card-title">{{$kategoriMerk[3]->merk}}</h5>
        <div class="height-img">
          <img src="assets/dell.png" alt="{{$kategoriMerk[3]->merk}}" ><br>
        </div>
        
        <a href="/product/{{$kategoriMerk[3]->slug}}" class="btn btn-outline-info mt-3">See More</a>
        </div>
      </div>
      <div class="card border-info mb-3 bg-dark bg-gradient" style="max-width: 18rem;" id="card-size">
        <div class="card-body text-light text-center d-block">
        <h5 class="card-title">{{$kategoriMerk[4]->merk}}</h5>
        <div class="height-img">
          <img src="assets/advan.jpg" class="card-img-top" alt="{{$kategoriMerk[4]->merk}}"><br>
        </div>
        
        <a href="/product/{{$kategoriMerk[4]->slug}}" class="btn btn-outline-info mt-3">See More</a>
        </div>
      </div>
    </div>
    
    <div class="text-center">
      <a href="/products" class="btn btn-outline-info mt-3">See all Product</a>
    </div>
  </div>
  @endsection
  
  <!-- Gallery section -->
    @section('gallery-section')
    <div class="p-2">
      <h2 class="fs-2 text-light text-gradient text-center my-5">Gallery</h2>
    </div>
    @endsection
    
  
  
  
  
