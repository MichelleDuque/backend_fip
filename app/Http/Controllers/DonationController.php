<?php

namespace App\Http\Controllers;

use App\Models\Donation;


class DonationController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $donations = Donation::all();
        return response()->json($donations);
    }

    public function getOne($id){

        $donation = Donation::find($id);
        return response()->json($donation);
    }



 

}

