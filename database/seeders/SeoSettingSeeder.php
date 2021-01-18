<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => 'Billy Burgers sprouted from a hot dog cart in Madison Square Park in Manhattan to support the Madison Square Park Conservancy’s first art installation. The cart was quite the success, with Shack fans lined up daily for three summers.',
            'keywords' => "burger, cheeseburger, local burger, bbq, hotdog, salad, starters, best burgers, fast food",
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
