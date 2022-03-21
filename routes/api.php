<?php

use App\Http\Controllers\Api\ArticlesController;
use App\Http\Controllers\Api\ArticleCategoryController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\CrudArticlesController;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\TagsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register', [AuthController::class, 'register'])
->name('register');

Route::post('login', [AuthController::class, 'login'])
->name('login');

Route::get('dashboard', [HomeController::class, 'dashboard'])
->name('dashboard');

Route::get('logout', [AuthController::class, 'logout'])
->name('logout');


Route::name('articles.')
    ->middleware('api')
    ->group( function() {

        Route::get('show/{id}', [ArticlesController::class, 'show'])
        ->name('show');
                
        Route::post('store-article', [ArticlesController::class, 'store'])
        ->name('store-article');

        Route::delete('delete/{id}', [ArticlesController::class, 'destroy'])
        ->name('delete');

        Route::get('showById/{id}', [TagsController::class, 'showById'])
        ->name('show-by-id');

        Route::get('showByTags/{tags}', [TagsController::class, 'showByTags'])
        ->name('show-by-tags');

        Route::patch('update-article', [ CrudArticlesController::class, 'updateArticle'])
        ->name('update-article');
        
        Route::get('show-all', [ CrudArticlesController::class, 'showAll'])
        ->name('show-all');
        
    }
);