<?php

namespace Database\Seeders;

use App\Models\{Customer, Product, User};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        Product::factory(100)->create();
        Customer::factory(100)->create();
    }
}
