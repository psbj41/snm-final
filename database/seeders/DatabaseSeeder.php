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
        ]);

        DB::table('users')->insert([
            'name' => "UPLOAD USER",
            'phone' => "9920636908",
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => "aarti",
            'phone' => "9920625758",
            'password' => Hash::make('password'),
        ]);

        DB::table('roles')->insert(
            ['name' => 'superadmin', 'guard_name' => 'web',]
        );

        DB::table('permissions')->insert(
            ['name' => 'superadmin access', 'guard_name' => 'web',]
        );

        DB::table('model_has_roles')->insert(
            ['role_id' => '1', 'model_type' => 'App\Models\User', 'model_id'=> '1']
        );
    }
}
