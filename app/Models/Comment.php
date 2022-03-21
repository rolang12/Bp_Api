<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
        'articles_id'
        
    ];
    
    public function users() {

        return $this->belongsTo(User::class,'user_id');

    }

    public function article() {

        return $this->belongsTo(Article::class,'articles_id');

    }

   
}
