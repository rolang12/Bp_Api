<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CrudArticlesController;
use App\Models\Article;
use App\Models\Services\TagsServices;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    use TagsServices;

    public function showById($tag)
    {
        $tags = TagsServices::getTagName($tag);
       
        $articles = TagsServices::getArticleByTagId($tags);

        // $tag = TagsServices::getTagName($tag);
        // $recentPosts = Article::with('category')->get()->take(-4);

        return CrudArticlesController::collection($articles);
    }

    public function showByTags($tag)
    {
        $articles = TagsServices::getArticleByTag($tag);
        $tags = TagsServices::getTagNameByName($tag);
        $recentPosts = Article::with('category')->get()->take(-4);

        return view('articles.article-tags', compact('articles','tags','recentPosts'));

    }
}
