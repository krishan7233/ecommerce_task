<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'Ecommerce Product',
            'product_description' => 'This is a Ecommerce product.',
            'price' => 100.00,
            'stock' => 10,
            'status'=>1
        ]);
    }
}
