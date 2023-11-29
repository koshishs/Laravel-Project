<?php

namespace Database\Seeders;

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
        $this->call(BookProductSeeder::class);
        $this->call(CdProductSeeder::class);
        $this->call(GameProductSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(UserSeeder::class);
    }
}
