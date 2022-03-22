<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Services\CommentsServices;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    use CommentsServices;

    public function store(StoreCommentRequest $request ){
        
        $request = $request->validated();
        
        if ($request) {

            $comment = CommentsServices::insertComment($request);
    
            return response()->json(['message' => "Comment Created successfully"], 200);
          
        }

          
        return response()->json(['message' => "Error to create comment "], 400);
        
    }
}
