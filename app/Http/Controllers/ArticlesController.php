<?php

namespace App\Http\Controllers;

use App\Models\Services\ArticlesServices;
use App\Models\Services\CommentsServices;
use App\Models\Services\CategoriesServices;
use App\Models\Services\ArticleCategoryServices;
use App\Models\Services\MediaServices;
use App\Models\Services\UsersServices;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Media;

use function PHPUnit\Framework\returnValue;

class ArticlesController extends Controller
{

    // use ArticlesServices;
    use CommentsServices;
    use CategoriesServices;  
    use UsersServices;
    use ArticleCategoryServices;
    use MediaServices;

    public function index()
    {
        return view('articles.write-article');
    }

    public function create()
    {
        
        return view('articles.write-article');
    }

    public function store(StoreArticleRequest $request)
    {

        $input = $request->validated();

        /* Extract User Data */
        $input              = $request->all();
        $input['user_id']   = auth()->user()->id;

        /* Call Categories' trait */
        $categories = $request->categories;
        $categories = CategoriesServices::insertTags($categories);

        /* Insert Image */
        $destination_path = 'public/images';
        $image = $request->file('media');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('media')->storeAs($destination_path, $image_name);
        $article['file'] = $image_name;
        // $mediaData['articles_id'] = $article['id'];
        // $media = Media::create($mediaData);

        $article['title'] = $input['title'];
        $article['content'] = $input['content'];
        $article['user_id'] = $input['user_id'];
        $article    = Article::create($article);
        
        /* Call Articles' trait */
        // $article    = ArticlesServices:: assignToArticle($input);

        /* Call ArticleCategoryServices' trait */
        $artCat = ArticleCategoryServices:: insertIds($categories->id, $article->id);
        
        /* Media Insert  */
        
       
    
        return redirect()->back()->with('status','Article shared Successfully!');
    }

    public function show($id)
    {
        /* Trait para obtener el articulo */
        // $article = ArticlesServices::getArticle($id);

        /* Scope para obtener el articulo */
        $article = ArticleCategory::getArticles($id)->get();
        dd($article);
        $comments = CommentsServices::getComment($id);
        $user = UsersServices::getUser($article->article->user_id);

        return view('articles.show-article', compact('article','comments','user'));
    }

    
}
