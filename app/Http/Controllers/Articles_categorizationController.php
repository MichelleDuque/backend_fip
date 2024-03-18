<?php

namespace App\Http\Controllers;

use App\Models\Articles_categorization;


class Articles_categorizationController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $articles_categorizations = Articles_categorization::all();
        return response()->json($articles_categorizations);
    }

    public function getOne($id){

        $articles_categorization = Articles_categorization::find($id);
        return response()->json($articles_categorization);
    }



 

}
