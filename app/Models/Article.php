<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'title',
        'content',
        'file',
        'user_id',                   //duda, debe ir el id cuando es hasmany?
    ];

   
    public function user() {

        // return $user->user_id();
        return $this->belongsTo(User::class);
    }

    public function media() {

        return $this->hasMany(Media::class, 'media_id');
    }

    public function comment() {

        return $this->hasMany(Comment::class) ;
    }
    
    public function category()
    {
        // return $category->category_id();
        return $this->belongsTo(Category::class);  
    }
   
    
    
}
