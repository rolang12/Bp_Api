<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Resources\CrudArticlesController as ResourcesCrudArticlesController;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Services\ArticlesServices;
use Illuminate\Http\Request;

class CrudArticlesController extends Controller
{
    public function showAll(){

        $articles = ArticlesServices::getArticlesCrud();
        $articles = new ResourcesCrudArticlesController($articles);
        return $articles;
    }

    public function updateArticle(UpdateArticleRequest $articleRequest){

        $article = ArticlesServices::updateArticle($articleRequest);
        
        if ($article = $articleRequest->validated() ){
            return response()->json(['message' => "Article updated successfully"], 200);
        }
        return response()->json(['message' => "Error to update Article "], 400);
        
    }

    public function destroy($id){
        $article = Article::findOrFail($id)->delete();
        $article = ArticleCategory::with('article')
        ->where('articles_id', $id)->delete();

        if ($article){
            return response()->json(['message' => "Article deleted successfully"], 200);
        }
        return response()->json(['message' => "Error to delete Article "], 400);
    
    }
}
