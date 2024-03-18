<?php

namespace App\Http\Controllers;

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



 

}

