<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'eirhiz.maniego',
                'full_name' => 'Eirhiz Jericko Maniego',
                'email' => 'eirhiz.maniego@example.test',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
