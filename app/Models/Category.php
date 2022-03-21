<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'tags',
    ];

    protected $table = 'Categories'; 

    public function articleCategory() {
        return $this->hasOne(ArticleCategory::class,'categories_id');
    }

    public function article()
    {
        return $this->hasMany(Article::class,'id');
    }

}
