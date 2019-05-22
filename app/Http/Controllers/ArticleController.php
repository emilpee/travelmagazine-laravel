<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Resources\Article as ArticleResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = DB::table('articles')
        ->orderBy('prio', 'asc')
        ->get();
        return view('magazine.index', [
            'articles' => $articles
        ]);
    }

    public function frontPage()
    {
        $categories = DB::table('categories')
        ->orderBy('category_id', 'asc')
        ->get();
        $ads = DB::table('ads')
        ->where('format', '=', 1)
        ->get();
        $mainArticle = DB::table('articles')
        ->where('prio', '=', 1)
        ->get();
        $secondArticle = DB::table('articles')
        ->where('prio', '=', 2)
        ->limit(6)
        ->get();
        $thirdArticle = DB::table('articles')
        ->where('prio', '=', 3)
        ->get();
        $thirdChosenArticle = DB::table('articles')
        ->where('prio', '=', 3)
        ->limit(1)
        ->get();
        return view('magazine.index', [
            'mainArticle' =>  $mainArticle, 
            'secondArticle' =>  $secondArticle,
            'thirdArticle' =>  $thirdArticle,
            'thirdChosenArticle' =>  $thirdChosenArticle,
            'ads' => $ads,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('magazine.edit', [
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = Input::get('title');
        $article->lead = Input::get('lead');
        $article->bodytext = Input::get('bodytext');
        $article->category_id = Input::get('category_id');
        $article->author = Input::get('author');
        $article->img_url = Input::get('img_url');
        $article->prio = Input::get('prio');         

        $article->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
