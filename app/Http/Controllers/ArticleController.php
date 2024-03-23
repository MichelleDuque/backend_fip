<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getAllArticleAuthor(){
        $articles = Article::join("authors", "articles.author", "=", "authors.id")-> select("articles.id", "title", "text", "first_name", "last_name", "about", "attention_phrase", "image")->get();
         return response()->json($articles);
    }

    public function getOne($id){

        $article = Article::find($id);
        return response()->json($article);
    }

    public function getOneArticleAuthor($id) {
        $article = Article::join("authors", "articles.author", "=", "authors.id")-> where("articles.id", "=", $id)->get();
        return response()->json($article);
    }

    public function save(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'image' => 'required',
            'attention_phrase' => 'required'
        ]);
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, $id) {
        $article = Article::findOrFail($id);
    
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
            'author' => 'required',
            'image' => 'required',
            'attention_phrase' => 'required'
        ]);
        $article->update($request->all());
        return response()->json($article);
    }

    public function delete($id) {
        $article = Article::findOrFail($id);
        $article->delete();
        return response()->json(null, 204);
    }

 

}

