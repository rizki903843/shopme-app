<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'produk 1',
                'price' => 200000,
                'stocks' => 20,
            ],
            [
                'name' => 'produk 2',
                'price' => 200000,
                'stocks' => 20,
            ],
            [
                'name' => 'produk 3',
                'price' => 200000,
                'stocks' => 20,
            ],
        ];

        foreach ($products as $key => $value) {
            Product::create([
                'name' => $value['name'],
                'price' => $value['price'],
                'stocks' => $value['stocks'],
            ]);
        }
    }
}
