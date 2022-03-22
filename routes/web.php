<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Collection;

/* Home Controller*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])
->middleware(['auth:sanctum', 'verified'])->name('dashboard');

/* Articles Controller*/
Route::name('articles.')
    ->middleware('auth:sanctum')
    ->group( function() {

    Route::get('write-articles', [App\Http\Controllers\ArticlesController::class, 'create'])
        ->name('write-articles');

    Route::post('store-articles', [App\Http\Controllers\ArticlesController::class, 'store'])
        ->name('store');

    Route::get('tags/{tags}', [App\Http\Controllers\TagsController::class, 'showById'])
        ->name('articles-tags');

    Route::get('tags/name/{tags}', [App\Http\Controllers\TagsController::class, 'showByTags'])
        ->name('articles-tags-name');

});

/* Crud Articles Controller */
Route::name('crud.articles.')
    ->middleware('auth:sanctum')
    ->group( function() {
        
    Route::get('crud-articles', [App\Http\Controllers\CrudArticlesController::class, 'index'])
        ->name('crud-articles');

    Route::get('show-articles/{id}', [App\Http\Controllers\ArticlesController::class, 'show'])
        ->name('show-articles');

    Route::get('destroy-article/{id}', [App\Http\Controllers\CrudArticlesController::class, 'destroy'])
        ->name('destroy-articles');

});

/* Crud Users Controller*/
Route::name('users.')
    ->middleware('auth:sanctum')
    ->group(function() {

    Route::get('crud', [App\Http\Controllers\CrudController::class, 'index'])
        ->name('crud');

    Route::get('crud/edit-users/{id}', [App\Http\Controllers\CrudController::class, 'edit'])
        ->name('edit-users');

    Route::delete('crud/destroy-users/{id}', [App\Http\Controllers\CrudController::class, 'destroy'])
        ->name('destroy-users');

    Route::patch('update-user', [App\Http\Controllers\CrudController::class, 'update'])
        ->name('update-user');

    Route::get('show-user-single/{id}', [App\Http\Controllers\CrudController::class, 'showUser'])
        ->name('show-user-single');
});

/* Comments Controller*/
Route::name('comments.')
    ->middleware('auth:sanctum')
    ->group(function() {

    Route::post('store-comments', [App\Http\Controllers\CommentsController::class, 'store'])
        ->name('store-comments');

    Route::get('delete-comment/{id}', [App\Http\Controllers\CommentsController::class, 'destroy'])
        ->name('delete-comments');
});