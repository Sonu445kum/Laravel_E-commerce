<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('data/products.json'));
        $products = json_decode($json, true);

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
