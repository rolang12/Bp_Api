<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Services\TagsServices;

class TagsController extends Controller
{
    use TagsServices;

    public function showById($tag)
    {
        $articles = TagsServices::getArticleByTagId($tag);
        $tag = TagsServices::getTagName($tag);
        $recentPosts = Article::with('category')->get()->take(-4);

        return view('articles.article-tags', compact('articles', 'tag','recentPosts'));
    }

    public function showByTags($tag)
    {
        $articles = TagsServices::getArticleByTag($tag);
        $tags = TagsServices::getTagNameByName($tag);
        $recentPosts = Article::with('category')->get()->take(-4);

        return view('articles.article-tags', compact('articles','tags','recentPosts'));

    }

}
