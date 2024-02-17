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
       // User::factory(10)->create();
         
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
