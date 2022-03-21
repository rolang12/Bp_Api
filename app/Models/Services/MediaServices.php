<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Media;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\UploadedFile as FileUploadedFile;

use Illuminate\Validation\Validator as ValidationValidator;

trait MediaServices {

    use HasFactory;

    public static $media;

    public static function insertMedia($media, $articleId) {


        if ($media->hasfile('media')){

            $destination_path = 'public/images';
            $image = $media->file('media');
            $image_name = $image->getClientOriginalName();
            $path = $media->file('media')->storeAs($destination_path,$image_name);
            
        }

        $mediaData['file'] = $image_name;
        $mediaData['articles_id'] = $articleId;
        $media = Media::create($mediaData);

        return $media;

    }


}

