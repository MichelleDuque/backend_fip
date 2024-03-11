<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collaborators extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["logo", "company_name"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
