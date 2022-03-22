<?php

namespace App\Models\Services;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait TagsServices {

    use HasFactory;

    public static $artTags;

    public static function getArticleByTagId($id) {

        
        // $artTags = ArticleCategory::with('article')
        // ->where('categories_id', $id)
        // ->get();

        $artTags = Article::with('category')
        ->where('category.tags', $id)
        ->get();

        if ($artTags == null) {
            return $artTags = [];
        }

        return $artTags;

    }

    public static function getArticleByTag($tag) {

        $artTags = Category::with('articleCategory','article')
        ->where('tags','like', '%'.$tag.'%')
        ->get();

        if ($artTags == null) {
            return $artTags = [];
        }

        return $artTags;

    }

    public static function getTagName($tag) {

        $artTags = Category::where('id', $tag)
        ->get('tags');

        if ($artTags === null) {
            return $artTags = [];
        }

        return $artTags;

    }

    public static function getTagNameByName($tag) {

        $artTags = Category::with('articleCategory','article')
        ->where('tags', 'like', $tag."%")
        ->select('tags','articlesid')
        ->get();


        dd($artTags);
        
        if ($artTags == null) {
            return $artTags = [];
        }

        return $artTags;

    }
    
}