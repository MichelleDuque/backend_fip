<?php

namespace App\Http\Controllers;

use App\Models\Author;


class AuthorController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll(){
        $authors = Author::all();
        return response()->json($authors);
    }

    public function getOne($id){

        $author = Author::find($id);
        return response()->json($author);
    }



 

}

