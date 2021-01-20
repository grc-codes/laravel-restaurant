<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fname' => 'Joe',
            'lname' => 'Budden',
            'email' => 'jbp@gmail.com',
            'password' => Hash::make('rootroot'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'fname' => 'Parks',
            'lname' => 'Valley',
            'email' => 'pvalley@gmail.com',
            'password' => Hash::make('rootroot'),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        $faker = Faker::create();
        foreach(range(1,100) as $index) {
            DB::table('users')->insert([
                'fname' => $faker->firstName,
                'lname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('rootroot'),
                'updated_at' => $faker->dateTimeThisMonth,
                'created_at' => $faker->dateTimeThisMonth
            ]);
        }
    }
}
