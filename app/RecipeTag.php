<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeTag extends Model
{
    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
