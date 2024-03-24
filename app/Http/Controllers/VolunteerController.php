<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Volunteer;


class VolunteerController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */


     public function getAll() {
        $volunteers = Volunteer::join("roles", "volunteers.role", "=", "roles.id")-> select("volunteers.id", "firstname", "lastname", "email", "phone", "notes", "name")->get();
        return response()->json($volunteers);
    }

    public function getOne($id) {
        $volunteer = Volunteer::join("roles", "volunteers.role", "=", "roles.id")-> where("volunteers.id", "=", $id)->get();
        return response()->json($volunteer);
    }

    public function save(Request $request) {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);
        $volunteer = Volunteer::create($request->all());
        return response()->json($volunteer, 201);
    }


        
    public function update(Request $request, $id) {
        $volunteer = Volunteer::findOrFail($id);
    
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);
        $volunteer->update($request->all());
        return response()->json($volunteer);
    }
    
    
    public function delete($id) {
        $volunteer = Volunteer::findOrFail($id);
        $volunteer->delete();
        return response()->json(null, 204);
    }
 

}

