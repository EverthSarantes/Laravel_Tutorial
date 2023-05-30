<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand')->get(); // Obtiene todos los Productos con sus Marcas

        return view('products.index', compact('products')); // Retorna la vista de los Productos
    }
}
