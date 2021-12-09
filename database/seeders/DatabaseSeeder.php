<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Box;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Product::truncate();
        Box::truncate();

        \App\Models\Box::factory(10)->create();
        \App\Models\Product::factory(10)->create();

    }
}
