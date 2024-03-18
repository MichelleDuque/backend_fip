<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;


class VolunteerController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function getAll(){
        $volunteers = Volunteer::all();
        return response()->json($volunteers);
    }

    public function getOne($id){

        $volunteer = Volunteer::find($id);
        return response()->json($volunteer);
    }



 

}

