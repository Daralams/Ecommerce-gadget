@extends('layouts.landingPage')
  @section('hero-section')
  <div class="w-100">
    <div class="mt-5 mb-5">
        <h2 class="fs-3 text-white mb-3">Cutting-edge Tech, Contemporary Style. Discover Your Dream Laptop at Tech<span class="text-info">Titan</span></h2>
        <p class="fs-5 text-white mb-4">Explore the world of technology with the latest in laptops and trendy designs. TechTitan</span> offers an unforgettable online shopping experience. Find your dream laptop now!</p>
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
    
  
  
  
  
