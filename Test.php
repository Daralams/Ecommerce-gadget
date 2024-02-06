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
