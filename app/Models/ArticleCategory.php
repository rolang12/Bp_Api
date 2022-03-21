<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;
    
    protected $table = 'article_category'; 

    protected $fillable = [
        'categories_id',
        'articles_id'    
    ];

    public function category() {

        return $this->belongsTo(Category::class,'categories_id');
    }

    public function article() {

        return $this->belongsTo(Article::class,'articles_id');
        // return $this->belongsToMany(Categories::class);
    }

    public function scopeGetArticles($query, $id)
    {

        $query->with('article', 'category')
        ->where('articles_id','=', $id)
        ->first();
        
        return $query;
        
    }
}
