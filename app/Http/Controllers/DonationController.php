<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Donation;


class DonationController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $donations = Donation::join("types", "donations.type", "=", "types.id")-> select("donations.id", "firstname", "lastname", "email", "amount", "title")->get();
        return response()->json($donations);
    }


    public function getOne($id) {
        $donation = Donation::join("types", "donations.type", "=", "types.id")-> where("donations.id", "=", $id)->get();
        return response()->json($donation);
    }


    
    public function save(Request $request) {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'type' => 'required',
        ]);
        $donation = Donation::create($request->all());
        return response()->json($donation, 201);
    }


    public function update(Request $request, $id) {
        $donation = Donation::findOrFail($id);
    
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'amount' => 'required',
            'type' => 'required',
        ]);
        $donation->update($request->all());
        return response()->json($donation);
    }

    public function delete($id) {
        $donation = Donation::findOrFail($id);
        $donation->delete();
        return response()->json(null, 204);
    }
 

}

