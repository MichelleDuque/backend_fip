<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gethelp extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["name", "email", "subject", "message"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
