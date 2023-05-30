<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('brand')->get(); // Obtiene todos los Productos con sus Marcas

        return view('products.index', compact('products')); // Retorna la vista de los Productos
    }

    public function create() // Retorna la vista para Crear los Productos
    {
        $brands = Brand::all(); // Obtiene todas las Marcas
        return view('products.create', compact('brands')); // Retorna la vista para Crear los Productos
    }

    public function store(Request $request) // Guarda los Productos
    {
        $request->validate([ // Valida los campos
            'name' => 'required',
            'description' => 'required',
            'brand_id' => 'required', // Valida que la Marca sea requerida
        ]);

        Product::create([ // Crea el Producto
            'name' => $request->name, // Guarda el Nombre
            'description' => $request->description, // Guarda la Descripción
            'brand_id' => $request->brand_id, // Guarda la Marca
        ]);

        return redirect()->route('products.index')->with('success', 'Producto creado correctamente'); // Retorna a la vista de los Productos
    }
}
