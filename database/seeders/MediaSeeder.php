<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $media = \App\Models\Media::factory()
        ->count(30)
        ->create();
    }
}
