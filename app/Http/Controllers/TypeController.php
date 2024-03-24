<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Type;


class TypeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $types = Type::all();
        return response()->json($types);
    }

    public function getOne($id){

        $type = Type::find($id);
        return response()->json($type);
    }

}
