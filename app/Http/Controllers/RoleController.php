<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;


class RoleController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function getAll(){
        $roles = Role::all();
        return response()->json($roles);
    }

    public function getOne($id){

        $role = Role::find($id);
        return response()->json($role);
    }

}
