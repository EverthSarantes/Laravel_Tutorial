<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandNames = [
            'Google',
            'Apple',
            'Samsung',
            'Huawei',
            'Microsoft',
            'MSI',
            'Asus',
            'Acer',
            'Lenovo',
            // Agrega más nombres de marcas según tus necesidades
            //php artisan make:seeder BrandsTableSeeder para crear seeder
            //php artisan db:seed --class=BrandSeeder para ejecutar seeder
        ];

        foreach ($brandNames as $brandName) {
            Brand::create([
                'name' => $brandName
            ]);
        }
    }
}
