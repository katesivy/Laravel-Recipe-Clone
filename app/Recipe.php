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
        return $this->belongsToMany('App\Tag', 'recipe_tags');
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
