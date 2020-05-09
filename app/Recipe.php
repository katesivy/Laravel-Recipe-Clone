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
        return $this->hasMany('App\RecipeTag');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'ingredient_recipes')->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
