<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

trait ArticleCategoryServices {

    use HasFactory;

    public static $artCat;

    public static function insertIds($categories, $article) {

        $categories = array(strval($categories));
        $article = array(strval($article));

        $artCat['categories_id'] = $categories[0];
        $artCat['articles_id'] = $article[0];
        $artCat = ArticleCategory::create($artCat);

        return $artCat;

    }


}