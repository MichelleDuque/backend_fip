<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function save(Request $request) {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'about' => 'required'
        ]);
        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    public function update(Request $request, $id) {
        $author = Author::findOrFail($id);
    
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'about' => 'required'
        ]);
        $author->update($request->all());
        return response()->json($author);
    }

        
    public function delete($id) {
        $author = Author::findOrFail($id);
        $author->delete();
        return response()->json(null, 204);
    }


 

}

