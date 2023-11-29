<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->count(10)
            ->create();
    
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'koshishadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Hello@123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);
    
    }
}
