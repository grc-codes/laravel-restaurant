<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('general_settings')->insert([
            'site_title' => 'Billy Burgers',
            'logo_image_url' => '/img/clipart-restaurant-restaurant-logo-5.png',
            'address_1' => '1565 N Raleigh St',
            'address_2' => '#100',
            'city' => 'Denver',
            'state' => 'CO',
            'zipcode' => '80204',
            'phone_number' => '720-456-6779',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
