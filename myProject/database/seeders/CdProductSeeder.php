<?php

namespace Database\Seeders;

use App\Models\CdProduct;
use Illuminate\Database\Seeder;

class CdProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CdProduct::factory()
                ->count(20)
                ->create();
    }
}
