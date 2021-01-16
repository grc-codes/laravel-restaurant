<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Gordon',
            'lname' => 'Ramsey',
            'email' => 'gr@gmail.com',
            'phone_number' => '2134567890',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
