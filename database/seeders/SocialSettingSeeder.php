<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SocialSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_settings')->insert([
            'facebook_url' => 'https://www.facebook.com/shakeshack/',
            'twitter_url' => 'https://twitter.com/shakeshack',
            'instagram_url' => 'https://www.instagram.com/shakeshack/',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
