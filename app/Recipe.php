<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function directions()
    {
        return $this->hasMany('App\Direction');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
