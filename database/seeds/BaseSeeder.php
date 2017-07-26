<?php

use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            'name' => 'Lamegaforge',
            'youtube_id' => 'UCv9-pi5_GsoJRFwmzfT6thA',
        ]);

        DB::table('twitchs')->insert([
            'name' => 'Lamegaforgelive',
            'youtube_id' => 'lamegaforgelive',
            'channel' => true,
        ]);
    }
}
