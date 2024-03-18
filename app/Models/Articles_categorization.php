<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles_categorization extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["category_id", "articles_id"];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}