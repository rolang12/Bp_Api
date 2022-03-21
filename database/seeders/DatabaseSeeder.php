<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Country;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CountrySeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            ArticleSeeder::class,
            ArticleCategorySeeder::class,
            CommentSeeder::class,
            MediaSeeder::class,
        ]);
  
    }
    
    
}
