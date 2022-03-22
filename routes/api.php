<?php

use App\Http\Controllers\Api\ArticlesController;
use App\Http\Controllers\Api\ArticleCategoryController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CommentsController;
use App\Http\Controllers\Api\CrudArticlesController;
use App\Http\Controllers\Api\CrudController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\TagsController;
use App\Http\Controllers\CommentController as ControllersCommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('register', [AuthController::class, 'register'])
// ->name('register');

// Route::post('login', [AuthController::class, 'login'])
// ->name('login');

// Route::get('dashboard', [HomeController::class, 'dashboard'])
// ->name('dashboard');

// Route::get('logout', [AuthController::class, 'logout'])
// ->name('logout');


// Route::name('articles.')
//     ->middleware('api')
//     ->group( function() {

//         Route::get('show/{id}', [ArticlesController::class, 'show'])
//         ->name('show');
                
//         Route::post('store-article', [ArticlesController::class, 'store'])
//         ->name('store-article');

//         Route::delete('delete/{id}', [ArticlesController::class, 'destroy'])
//         ->name('delete');

//         Route::get('showById/{id}', [TagsController::class, 'showById'])
//         ->name('show-by-id');

//         Route::get('showByTags/{tags}', [TagsController::class, 'showByTags'])
//         ->name('show-by-tags');

//         Route::patch('update-article', [ CrudArticlesController::class, 'updateArticle'])
//         ->name('update-article');
        
//         Route::get('show-all', [CrudArticlesController::class, 'showAll'])
//         ->name('show-all');
        
//     }
// );

// Route::name('users.')
//     ->middleware('api')
//     ->group(function() {

//     Route::get('crud', [CrudController::class, 'index'])
//         ->name('crud');

//     Route::delete('destroy-user/{id}', [CrudController::class, 'destroy'])
//         ->name('destroy-user');

//     Route::patch('update-user', [CrudController::class, 'update'])
//         ->name('update-user');

//     Route::post('crud/create-users', [CrudController::class, 'store'])
//         ->name('create-users');

//     Route::get('show-user-single/{id}', [CrudController::class, 'showUser'])
//         ->name('show-user-single');
// });


/* Comments Controller*/
// Route::name('comments.')
//     ->middleware('api')
//     ->group(function() {

//     Route::post('store-comment', [ CommentsController ::class, 'store'])
//         ->name('store-comment');

//     Route::get('delete-comment/{id}', [CommentController::class, 'destroy'])
//         ->name('delete-comments');
// });