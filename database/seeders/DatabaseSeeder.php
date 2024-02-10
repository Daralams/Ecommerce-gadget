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
          "merk" => "Msi",
          "slug" => "msi"
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
          "tipe_laptop" => "Asus ZenBook Pro 14 oled",
          "slug" => "asus-zenbook-pro-14-oled",
          "varian" => "16 GB / 32 GB",
          "harga" => 38000000,
          "detail_product" => "Laptop Asus ZenBook Pro Oled",
          "stok" => 15
          ]);
        Products::create([
          "id_merk" => 1,
          "gambar" => "asus2.jpg",
          "tipe_laptop" => "Asus Vivobook 14x oled",
          "slug" => "asus-vivobook-14x-oled",
          "varian" => "16 GB / 32 GB",
          "harga" => 13000000,
          "detail_product" => "Laptop Asus vivobook 14x Oled",
          "stok" => 10
          ]);
        Products::create([
          "id_merk" => 1,
          "gambar" => "asus2.jpg",
          "tipe_laptop" => "Asus Vivobook pro 15 oled",
          "slug" => "asus-vivobook-pro-15-oled",
          "varian" => "16 GB / 32 GB",
          "harga" => 16000000,
          "detail_product" => "Laptop Asus ZenBook Pro Oled",
          "stok" => 15
          ]);
          
        Products::create([
          "id_merk" => 2,
          "gambar" => "acer1.jpg",
          "tipe_laptop" => "Acer Swift go 14",
          "slug" => "acer-swift-go-14",
          "varian" => "8 GB / 16 GB",
          "harga" => 15000000,
          "detail_product" => "Laptop  Acer go 14!Swift, laptop untuk kerja bahkan gaming",
          "stok" => 12
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
          "id_merk" => 2,
          "gambar" => "acer2.jpg",
          "tipe_laptop" => "Acer aspire 3",
          "slug" => "acer-aspire-3",
          "varian" => "4 GB / 8 GB",
          "harga" => 5000000,
          "detail_product" => "Laptop Acer aspire 3, laptop ekonomis untuk produktifitas",
          "stok" => 13
          ]);
        Products::create([
          "id_merk" => 2,
          "gambar" => "acer2.jpg",
          "tipe_laptop" => "Acer aspire vero",
          "slug" => "acer-aspire-vero",
          "varian" => "4 GB / 8 GB",
          "harga" => 9000000,
          "detail_product" => "Laptop Acer aspire vero, laptop ekonomis untuk produktifitas",
          "stok" => 20
          ]);
          
        Products::create([
          "id_merk" => 3,
          "gambar" => "lenovo.jpg",
          "tipe_laptop" => "Lenovo Legion 7i",
          "slug" => "lenovo-legion-7i",
          "varian" => "16 GB / 32 GB",
          "harga" => 25000000,
          "detail_product" => "Laptop Lenovo legion 7i, laptop untuk Main game",
          "stok" => 12
          ]);
        Products::create([
          "id_merk" => 3,
          "gambar" => "lenovo.jpg",
          "tipe_laptop" => "Lenovo Legion 5i",
          "slug" => "lenovo-legion-5i",
          "varian" => "16 GB / 32 GB",
          "harga" => 18000000,
          "detail_product" => "Laptop Lenovo legion 5i, laptop untuk Main game",
          "stok" => 16
          ]);
        Products::create([
          "id_merk" => 3,
          "gambar" => "lenovo.jpg",
          "tipe_laptop" => "Lenovo ideapad slim 3i",
          "slug" => "lenovo-ideapad-slim-3i",
          "varian" => "8 GB / 16 GB",
          "harga" => 8000000,
          "detail_product" => "Laptop Lenovo ideapad slim 3i 5i, laptop untuk produktifitas",
          "stok" => 16
          ]);
          
        Products::create([
          "id_merk" => 4,
          "gambar" => "dell.jpg",
          "tipe_laptop" => "Dell Vostro 13 53103i",
          "slug" => "dell-vostro-13 -5310",
          "varian" => "8 GB / 16 GB",
          "harga" => 10000000,
          "detail_product" => "Laptop Dell Vostro 13 53103i, laptop untuk produktifitas",
          "stok" => 16
          ]);
        Products::create([
          "id_merk" => 4,
          "gambar" => "dell.jpg",
          "tipe_laptop" => "Dell Inspiron 3501",
          "slug" => "dell-inspiron-3501",
          "varian" => "8 GB / 16 GB",
          "harga" => 7000000,
          "detail_product" => "Laptop Dell Inspiron 3501, laptop untuk produktifitas",
          "stok" => 7
          ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
