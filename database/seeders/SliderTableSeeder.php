<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slider')->insert([
          'zag' => 'zag',
          'title' => 'title',
          'link'  => 'link',
          'image' => 'black-carbon-industrial-background_79145-253.jpg'
        ]);
    }
}
 