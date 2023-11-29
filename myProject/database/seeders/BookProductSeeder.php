<?php

namespace Database\Seeders;

use App\Models\BookProduct;
use Illuminate\Database\Seeder;

class BookProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookProduct::factory()
              ->count(20)
              ->create();
    }
}
