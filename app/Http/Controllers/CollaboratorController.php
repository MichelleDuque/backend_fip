<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function save(Request $request) {
        $this->validate($request, [
            'logo' => 'required',
            'company_name' => 'required',
        ]);
        $collaborator = Collaborator::create($request->all());
        return response()->json($collaborator, 201);
    }

       
    public function update(Request $request, $id) {
        $collaborator = Collaborator::findOrFail($id);
    
        $this->validate($request, [
            'logo' => 'required',
            'company_name' => 'required',
        ]);
        $collaborator->update($request->all());
        return response()->json($collaborator);
    }

    public function delete($id) {
        $collaborator = Collaborator::findOrFail($id);
        $collaborator->delete();
        return response()->json(null, 204);
    }

 

}

