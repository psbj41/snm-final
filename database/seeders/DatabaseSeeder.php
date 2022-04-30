<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => "SuperAdmin",
            'phone' => "7218358829",
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        DB::table('users')->insert([
            'name' => "UPLOAD USER",
            'phone' => "9920636908",
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        DB::table('users')->insert([
            'name' => "aarti",
            'phone' => "9920625758",
            'password' => Hash::make('password'),
            'role' => 'superadmin',
        ]);

        DB::table('thoughts')->insert([
            'thought' => "“Extraordinary things are always hiding in places people never think to look.” —Jodi Picoul",
        ]);
    }
}
