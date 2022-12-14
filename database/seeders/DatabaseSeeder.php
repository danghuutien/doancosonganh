<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(LoaibvSeeder::class);
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'buidinhconghau@gmail.com',
            'password' => Hash::make('123456'),
        ],
        [
            'name' => 'Admin',
            'email' => 'anhquan@gmail.com',
            'password' => Hash::make('123456'),
        ]
    );

       
    }
}
