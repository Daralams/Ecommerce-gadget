<?php

namespace App\Models;



class OldProducts
{
    private static $product_list = [
    [
      "merk" => "Lenovo legion 5",
      "slug" => "1-lenovo-legion-5",
      "kategori" => "Gaming",
      "rating" => "4.5 ⭐",
      "harga" => "60.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
    [
      "merk" => "Asus ROG Strix",
      "slug" => "2-asus-rog-strix",
      "kategori" => "Gaming",
      "rating" => "3.5 ⭐",
      "harga" => "75.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
    [
      "merk" => "Hp Pavilion",
      "slug" => "3-hp-pavilion",
      "kategori" => "Gaming",
      "rating" => "4.2 ⭐",
      "harga" => "45.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
    [
      "merk" => "Asus Zenbook pro",
      "slug" => "4-asus-zenbook-pro",
      "kategori" => "Work laptop",
      "rating" => "4.0 ⭐",
      "harga" => "15.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
    [
      "merk" => "Lenovo ideapad slim 5i",
      "slug" => "5-lenovo-ideapad-slim-5i",
      "kategori" => "Work laptop",
      "rating" => "3.3 ⭐",
      "harga" => "16.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
    [
      "merk" => "Advan Workplus",
      "slug" => "6-advan-workplus",
      "kategori" => "Work laptop",
      "rating" => "4.4 ⭐",
      "harga" => "7.000.000",
      "deskripsi" => "Laptop untuk ngoding, gaming, dan design"
    ],
  ];
  // self khusus utk : properti static
  // static khusus utk : method static
  public static function all() {
    // array collection
    return collect(self::$product_list);
  }
  
  public static function find($slug) {
   /* before using collection
    $products = self::$product_list;
    $product = [];
    foreach ($products as $p) {
      if($p["slug"] === $slug) {
        $product = $p;
      }
    } */
    /*after using collection, jadi lebih singkat ngaff*/
    $products = static::all();
    return $products->firstWhere('slug', $slug);
  }
}

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

