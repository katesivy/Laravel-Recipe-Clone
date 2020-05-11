<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function recipe()
    {
        return $this->belongsToMany('App\Recipe', 'recipe_tags');
    }
}
