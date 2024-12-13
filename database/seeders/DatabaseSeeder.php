<?php

namespace Database\Seeders;

use App\Models\Cart;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'id' => 1,
            'name' => 'lambang',
            'email' => 'akun1@gmail.com',
            'address'=> 'serayu',
            'phone_number' => '08212345008',
            'password' => '123',
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'wahyu',
            'email' => 'akun2@gmail.com',
            'address'=> 'dampar',
            'phone_number' => '08212345678',
            'password' => '123',
        ]);
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
    }
}
