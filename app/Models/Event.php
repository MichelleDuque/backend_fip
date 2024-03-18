<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["title", "date", "description", "photo"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
