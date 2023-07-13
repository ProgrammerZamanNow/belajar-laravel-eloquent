<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();
        $product->id = "1";
        $product->name = "Product 1";
        $product->description = "Description 1";
        $product->category_id = "FOOD";
        $product->save();

        $product2 = new Product();
        $product2->id = "2";
        $product2->name = "Product 2";
        $product2->description = "Description 2";
        $product2->category_id = "FOOD";
        $product2->price = 200;
        $product2->save();
    }
}
