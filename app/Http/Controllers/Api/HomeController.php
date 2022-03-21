<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeController as ResourcesHomeController;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // use ArticlesServices;

    public function dashboard(){

        $articles = Article::with('category')->simplePaginate(5);
        $recentPosts = Article::with('category')->get()->take(-4);

        return ResourcesHomeController::collection($recentPosts, $articles);
    }
}
