<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teammember;


class TeammemberController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function getAll() {
        $teammembers = Teammember::join("positions", "teammembers.position", "=", "positions.id")-> select("teammembers.id", "firstname", "lastname", "title", "description", "photo")->get();
        return response()->json($teammembers);
    }

    public function getOne($id) {
        $teammember = Teammember::join("positions", "teammembers.position", "=", "positions.id")-> where("teammembers.id", "=", $id)->get();
        return response()->json($teammember);
    }


    public function save(Request $request) {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);
        $teammember = Teammember::create($request->all());
        return response()->json($teammember, 201);
    }

    public function update(Request $request, $id) {
        $teammember = Teammember::findOrFail($id);
    
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);
        $teammember->update($request->all());
        return response()->json($teammember);
    }
    
    
    public function delete($id) {
        $teammember = Teammember::findOrFail($id);
        $teammember->delete();
        return response()->json(null, 204);
    }
    
 

}

