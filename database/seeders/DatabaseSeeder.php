<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table ('accounts')->insert ([
            'name' => 'adimin1',
            'email' => 'admin@gmail.com',
            'phone' => '123254455',
            'password' => Hash::make('1'),
            'role'  => 'admin'
        ]);
        DB::table ('accounts')->insert ([
            'name' => 'customer1',
            'email' => 'customer@gmail.com',
            'phone' => '123224455',
            'password' => Hash::make('1'),
            'role'  => 'customer'
        ]);

    }
}
