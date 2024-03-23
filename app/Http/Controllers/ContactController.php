<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    
    public function save(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'textinput' => 'required'
        ]);
        $contact = Contact::create($request->all());
        return response()->json($contact, 201);
    }

    public function update(Request $request, $id) {
        $contact = Contact::findOrFail($id);
    
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'textinput' => 'required'
        ]);
        $contact->update($request->all());
        return response()->json($contact);
    }

 
        
    public function delete($id) {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return response()->json(null, 204);
    }

}

