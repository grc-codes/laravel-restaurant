<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Created users
        DB::table('roles')->insert([
            'title' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'Employee'
        ]);

        // Assigned users to roles
        DB::table('role_user')->insert([
            'role_id' => '1',
            'user_id' => '1'
        ]);

        DB::table('role_user')->insert([
            'role_id' => '2',
            'user_id' => '2'
        ]);

        $faker = Faker::create();
        foreach(range(3,100) as $index) {
            DB::table('role_user')->insert([
                'user_id' => $index,
                'role_id' => rand(1,2)
            ]);
        }
    }
}
