<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory; // Esto es usado para que se pueda usar el método factory() en el modelo

    protected $fillable = ['name']; // Campos que se pueden Llenar

    public function products() // Relación de uno a muchos
    {
        return $this->hasMany(Product::class); // Un Brand (una Marca) tiene muchos Productos
    }

}
