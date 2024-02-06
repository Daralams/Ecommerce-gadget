<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_merk'); // Tambahkan ini
            /*$table->foreignId('id_merk')->constrained('kategori_merks', 'id')->onDelete('cascade'); // Tambahkan ini*/
            $table->text('gambar');
            $table->string('tipe_laptop');
            $table->string('slug')->unique();
            $table->string('varian');
            $table->integer('harga');
            $table->text('detail_product');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
