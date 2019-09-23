<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
          "name" => "Product A",
          "description" => "Penjelasan tentang Produk A"
        ]);
    }
}
