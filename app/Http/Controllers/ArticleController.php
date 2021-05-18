<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends FrontendController
{
    public function getListArticle()
    {       
        $articles = Article::paginate(5);

        return view('article.index', compact('articles'));
    }
    public function getDetailArticle(Request $request ,$id)
    {
        $arrayUrl = preg_split("/(-)/i", $request->segment(2));

        $id = array_pop($arrayUrl);

        if($id)
        {
            $articleDetail = Article::find($id);
            $articles = Article::orderBy('a_view', 'asc')->orderBy('created_at', 'desc')->limit(3)->get();

            $viewData = [
                'articles' => $articles,
                'articleDetail' => $articleDetail
            ];

            return view('article.detail', $viewData);
        }
        
    }
}
