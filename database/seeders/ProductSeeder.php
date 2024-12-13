<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // baju

        Product::create([
            'name' => 'baju1',
            'price' => 124999,
            'stock' => 13,
            'category_id' => 1,
            'pict' => 'baju1.jpeg',
        ]);
        Product::create([
            'name' => 'baju2',
            'price' => 499999,
            'stock' => 4,
            'category_id' => 1,
            'pict' => 'baju2.jpg',
        ]);
        Product::create([
            'name' => 'baju3',
            'price' => 299999,
            'stock' => 10,
            'category_id' => 1,
            'pict' => 'baju3.jpg',
        ]);
        Product::create([
            'name' => 'baju4',
            'price' => 99999,
            'stock' => 20,
            'category_id' => 1,
            'pict' => 'baju4.jpg',
        ]);
        Product::create([
            'name' => 'baju5',
            'price' => 249999,
            'stock' => 15,
            'category_id' => 1,
            'pict' => 'baju5.jpg',
        ]);

        // celana

        Product::create([
            'name' => 'celana1',
            'price' => 314999,
            'stock' => 15,
            'category_id' => 2,
            'pict' => 'celana1.jpg',
        ]);
        Product::create([
            'name' => 'celana2',
            'price' => 199999,
            'stock' => 9,
            'category_id' => 2,
            'pict' => 'celana2.jpg',
        ]);
        Product::create([
            'name' => 'celana3',
            'price' => 249999,
            'stock' => 10,
            'category_id' => 2,
            'pict' => 'celana3.jpg',
        ]);
        Product::create([
            'name' => 'celana4',
            'price' => 149999,
            'stock' => 22,
            'category_id' => 2,
            'pict' => 'celana4.jpg',
        ]);
        Product::create([
            'name' => 'celana5',
            'price' => 139999,
            'stock' => 16,
            'category_id' => 2,
            'pict' => 'celana5.jpg',
        ]);

        // topi

        Product::create([
            'name' => 'topi1',
            'price' => 69999,
            'stock' => 15,
            'category_id' => 3,
            'pict' => 'topi1.jpg',
        ]);
        Product::create([
            'name' => 'topi2',
            'price' => 99999,
            'stock' => 4,
            'category_id' => 3,
            'pict' => 'topi2.jpg',
        ]);
        Product::create([
            'name' => 'topi3',
            'price' => 149999,
            'stock' => 3,
            'category_id' => 3,
            'pict' => 'topi3.jpg',
        ]);
        Product::create([
            'name' => 'topi4',
            'price' => 129999,
            'stock' => 8,
            'category_id' => 3,
            'pict' => 'topi4.jpg',
        ]);
        Product::create([
            'name' => 'topi5',
            'price' => 249999,
            'stock' => 5,
            'category_id' => 3,
            'pict' => 'topi5.jpg',
        ]);
    }
}
