<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Newsletter;


class NewsletterController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $newsletters = Newsletter::all();
        return response()->json($newsletters);
    }

    public function getOne($id){

        $newsletter = Newsletter::find($id);
        return response()->json($newsletter);
    }


    public function save(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        $newsletter = Newsletter::create($request->all());
        return response()->json($newsletter, 201);
    }
    
    public function update(Request $request, $id) {
        $newsletter = Newsletter::findOrFail($id);
    
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        $newsletter->update($request->all());
        return response()->json($newsletter);
    }
    
    
    public function delete($id) {
        $newsletter = Newsletter::findOrFail($id);
        $newsletter->delete();
        return response()->json(null, 204);
    }
}

