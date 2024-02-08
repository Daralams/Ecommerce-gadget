<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriMerk extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
    
    public function products ():HasMany
    {
      return $this->hasMany(Products::class, 'id_merk');
    }
}
