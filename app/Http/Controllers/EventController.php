<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;


class EventController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $events = Event::all();
        return response()->json($events);
    }

    public function getOne($id){

        $event = Event::find($id);
        return response()->json($event);
    }

    public function save(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);
        $event = Event::create($request->all());
        return response()->json($event, 201);
    }

    public function update(Request $request, $id) {
        $event = Event::findOrFail($id);
    
        $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'photo' => 'required'
        ]);
        $event->update($request->all());
        return response()->json($event);
    }
    
    
    public function delete($id) {
        $event = Event::findOrFail($id);
        $event->delete();
        return response()->json(null, 204);
    }
 

}

