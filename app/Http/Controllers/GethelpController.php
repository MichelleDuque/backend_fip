<?php

namespace App\Http\Controllers;

use App\Models\Gethelp;


class GethelpController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $gethelps = Gethelp::all();
        return response()->json($gethelps);
    }

    public function getOne($id){

        $gethelp = Gethelp::find($id);
        return response()->json($gethelp);
    }


 

}

