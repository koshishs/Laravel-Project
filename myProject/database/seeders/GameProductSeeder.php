<?php

namespace Database\Seeders;

use App\Models\GameProduct;
use Illuminate\Database\Seeder;

class GameProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameProduct::factory()
                ->count(20)
                ->create();
    }
}
