<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $artCat = \App\Models\ArticleCategory::factory()
        ->count(30)
        ->create();
    }
}
