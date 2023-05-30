<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'description', 'brand_id']; // Campos que se pueden Llenar

    public function brand() // Relación de uno a muchos inversa
    {
        return $this->belongsTo(Brand::class); // Un Producto pertenece a una Marca
    }
}
