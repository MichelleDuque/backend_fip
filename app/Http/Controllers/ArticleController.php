<?php

namespace App\Http\Controllers;

use App\Models\Article;


class ArticleController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll(){
        $articles = Article::all();
        return response()->json($articles);
    }

    public function getOne($id){

        $article = Article::find($id);
        return response()->json($article);
    }




 

}

