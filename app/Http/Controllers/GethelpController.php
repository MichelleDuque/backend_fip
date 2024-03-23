<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function save(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $gethelp = Gethelp::create($request->all());
        return response()->json($gethelp, 201);
    }
    
    public function update(Request $request, $id) {
        $gethelp = Gethelp::findOrFail($id);
    
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $gethelp->update($request->all());
        return response()->json($gethelp);
    }
    
    
    public function delete($id) {
        $gethelp = Gethelp::findOrFail($id);
        $gethelp->delete();
        return response()->json(null, 204);
    }
}

