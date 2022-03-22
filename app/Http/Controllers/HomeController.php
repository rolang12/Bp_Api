<?php

namespace App\Http\Controllers;

use App\Models\Services\ArticlesServices;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Country;
use App\Models\User;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\ArrayItem;

class HomeController extends Controller
{
    // use ArticlesServices;

    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
                
        // $articles = Article::with('category')->simplePaginate(12);'articles',
        $recentPosts = Article::with('category')->get()->take(-4);

        return view('dashboard', compact('recentPosts'));

    }
}
