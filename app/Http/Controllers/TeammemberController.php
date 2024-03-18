<?php

namespace App\Http\Controllers;

use App\Models\Teammember;


class TeammemberController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $teammembers = Teammember::all();
        return response()->json($teammembers);
    }

    public function getOne($id){

        $teammember = Teammember::find($id);
        return response()->json($teammember);
    }



 

}

