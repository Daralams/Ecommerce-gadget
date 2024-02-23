<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Products extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function scopeSearching($query) {
      if(request('search')) {
        return $query->where('tipe_laptop', 'like', '%'. request('search'). '%');
      }
    }
    
    public function kategoriMerk(): BelongsTo
    {
      return $this->belongsTo(KategoriMerk::class, 'id_merk');
    }
    
    public function orders(): BelongsTo
    {
      return $this->belongsTo(Orders::class, 'id_product');
    }
    
}