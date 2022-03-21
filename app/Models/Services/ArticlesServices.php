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

trait ArticlesServices {

    use HasFactory;

    public static $articles;

    public static function getArticlesLimit() {

        $articles = Article::limit('10')
        ->get();

        return $articles;

    }

    public static function getArticlesAll() {

        $articles = Article::all();

        return $articles;

    }

    public static function getArticle($id) {

        $articles = ArticleCategory::with(['article', 'category'])
        ->where('articles_id','=', $id)
        ->first();

        return $articles;
    }

    public static function bindDataToArticle($input) {

        $article['title'] = $input['title'];
        $article['content'] = $input['content'];
        $article['user_id'] = $input['user_id'];
        // $destination_path = 'public/images';
        // $image = $requestMedia->file('media');
        // $image_name = $image->getClientOriginalName();
        // $path = $requestMedia->file('media')->storeAs($destination_path, $image_name);
        // $mediaData['articles_id'] = $article['id'];
        // $article['file'] = $image_name;
        // $media = Media::create($mediaData);

        $article    = Article::create($article);
        
        return $article;
    
    }

    public static function getArticlesCrud() {

        $articles = Article::with('user')->get();

        return $articles;

    }
    public static function updateArticle($data) {

        $user = Article::find($data->id);
        $user->title         = $data->title;
        $user->content        = $data->content;
        $user->rol          = $data->rol;
        return $user->save();

    }

}