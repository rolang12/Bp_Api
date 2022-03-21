<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Http\Requests\CategoryRequest;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait CategoriesServices {

    use HasFactory;

    public static $categories;

    public static function insertTags($categories) {

        $categories = implode(", ", $categories);
        
        $category['tags'] = $categories;
        
        $category   = Category::create($category);
        
        return $category;    
        
    }

}