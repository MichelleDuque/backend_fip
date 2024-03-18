<?php

namespace App\Http\Controllers;

use App\Models\Contact;


class ContactController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function getOne($id){

        $contact = Contact::find($id);
        return response()->json($contact);
    }



 

}

