<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Products;
use App\Models\KategoriMerk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
         
        KategoriMerk::create([
          "merk" => "Asus",
          "slug" => "asus"
           ]);
        KategoriMerk::create([
          "merk" => "Acer",
          "slug" => "acer"
           ]);
        KategoriMerk::create([
          "merk" => "Lenovo",
          "slug" => "lenovo"
           ]);
        KategoriMerk::create([
          "merk" => "Dell",
          "slug" => "dell"
           ]);
        KategoriMerk::create([
          "merk" => "Advan",
          "slug" => "advan"
           ]); 
           
        Products::create([
          "id_merk" => 1,
          "gambar" => "asus1.jpg",
          "tipe_laptop" => "Asus Tuf Gaming F15",
          "slug" => "asus-tuf-gaming-f15",
          "varian" => "8 GB / 16 GB",
          "harga" => 20000000,
          "detail_product" => "Laptop Gaming Asus TUF F15",
          "stok" => 10
          ]);
        Products::create([
          "id_merk" => 1,
          "gambar" => "asus2.jpg",
          "tipe_laptop" => "Asus ZenBook Pro",
          "slug" => "asus-zenbook-pro",
          "varian" => "8 GB / 16 GB",
          "harga" => 15000000,
          "detail_product" => "Laptop Asus ZenBook Pro Oled",
          "stok" => 15
          ]);
        Products::create([
          "id_merk" => 2,
          "gambar" => "acer1.jpg",
          "tipe_laptop" => "Acer Swift",
          "slug" => "acer-swift",
          "varian" => "8 GB / 16 GB",
          "harga" => 12000000,
          "detail_product" => "Laptop Acer Swift, laptop untuk kerja",
          "stok" => 8
          ]);
        Products::create([
          "id_merk" => 2,
          "gambar" => "acer2.jpg",
          "tipe_laptop" => "Acer Nitro 5",
          "slug" => "acer-nitro-5",
          "varian" => "8 GB / 16 GB",
          "harga" => 14000000,
          "detail_product" => "Laptop Acer Nitro 5, laptop untuk Main game",
          "stok" => 12
          ]);
        Products::create([
          "id_merk" => 3,
          "gambar" => "lenovo.jpg",
          "tipe_laptop" => "Lenovo Legion 7i",
          "slug" => "lenovo-legion-7i",
          "varian" => "16 GB / 32 GB",
          "harga" => 18000000,
          "detail_product" => "Laptop Lenovo legion 7i, laptop untuk Main game",
          "stok" => 12
          ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
