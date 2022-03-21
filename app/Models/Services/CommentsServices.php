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

trait CommentsServices {

    use HasFactory;

    public static $comments;

    public static function getComment($id) {

        $comments = Comment::with('article', 'users')
        ->where('articles_id', $id)
        ->get();

        if ($comments == null) {
            return $comments = [];
        }

        return $comments;

    }
    public static function insertComment($data) {

        $comment = $data->validated(); 
        
        $comment['articles_id'] = $data['articles_id'];
        $comment['content'] = $data['content'];
        $comment['user_id'] = auth()->user()->id;
        $comment['articles_id'] = intval($data['articles_id'], 10);
        
        $comment = Comment::create($comment);

        return $comment;
        
    }


}