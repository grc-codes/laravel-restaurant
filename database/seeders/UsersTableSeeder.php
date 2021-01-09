<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'password' => Hash::make('rootroot')
        ]);

        DB::table('users')->insert([
            'fname' => 'Parks',
            'lname' => 'Valley',
            'email' => 'pvalley@gmail.com',
            'password' => Hash::make('rootroot')
        ]);
    }
}
