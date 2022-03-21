<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Validator as ValidationValidator;

trait UsersServices {

    use HasFactory;

    public static $users;

    public static function getUser($id) {

        $users = User::where('id', $id)
        ->first();

        return $users;

    }

    public static function updateUser($data) {

        $user = User::find($data->id);
        $user->name         = $data->name;
        $user->email        = $data->email;
        $user->rol          = $data->rol;
        return $user->save();
        
    }

}