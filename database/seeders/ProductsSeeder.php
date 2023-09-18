<?php

namespace Database\Seeders;

use App\Http\Services\FancyClothesApi;
use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function __construct(public FancyClothesApi $clothesApi)
    {
        //
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = $this->clothesApi->getListProducts();

        foreach ($products as $product) {
            ProductModel::create([
                'id' => $product['id'],
                'slug' => $product['slug'],
            ]);
        }
    }
}
