<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;


class CollaboratorController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function getAll(){
        $collaborators = Collaborator::all();
        return response()->json($collaborators);
    }

    public function getOne($id){

        $collaborator = Collaborator::find($id);
        return response()->json($collaborator);
    }



 

}

