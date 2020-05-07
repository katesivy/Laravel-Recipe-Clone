<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public function directions()
    {
        return $this->hasMany('App\Direction');
    }

    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function recipes_ingredients()
    {
        return $this->hasMany('App\Recipe_Ingredient');
    }
    
}
