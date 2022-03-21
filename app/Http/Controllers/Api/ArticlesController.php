<?php

namespace App\Http\Controllers\Api;

use App\Facades\Articles;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Resources\ArticleController;
use App\Models\Article;
use App\Models\Services\ArticleCategoryServices;
use App\Models\Services\ArticlesServices;
use App\Models\Services\CategoriesServices;
use App\Models\Services\CommentsServices;
use App\Models\Services\MediaServices;
use App\Models\Services\UsersServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticlesController extends Controller
{
      use ArticlesServices;
      use CommentsServices;
      use CategoriesServices;  
      use UsersServices;
      use ArticleCategoryServices;
      use MediaServices;
  
      public function store(StoreArticleRequest $request)
      {
         
          if ($data = $request->validated()) {
              
              DB::beginTransaction();
              /* Call Categories' trait */
                  $categories = CategoriesServices::insertTags($request->categories);
  
              /* Call Articles' trait */
                  $article    = ArticlesServices::bindDataToArticle($data);
                //   $article = Articles::bindDataToArticle($data);
                   
              /* Call ArticleCategoryServices' trait */
                  $artCat     = ArticleCategoryServices::insertIds($categories, $article);
               
                  return response()->json(['message' => "Article Created succesfully", 'Article: ' => $article ], 201);
          }      
          DB::commit();
          return response()->json(['message' => 'Error to create article' ], 500);
  
  
          
      }
  
      public function showSingle($id)
      {
  
          /* Trait para obtener el articulo */
          $article = ArticlesServices::getArticle($id);
          
          $comments = CommentsServices::getComment($id);
          
          $user = UsersServices::getUser($article->article->user_id);
  
          $data = new ArticleController($article, $comments, $user);
  
          return $data;
          
          
      }
  
      public function destroy($id) 
      {
          $article = Article::findOrFail($id)->delete() ;
  
          if (!$article) {
              return response()->json(["article '$id' doesn't exists"],200); 
          }
          
          return response()->json(["article '$id' has been deleted"],200);
      }
}
