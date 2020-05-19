<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IngredientRecipes extends Model
{
    protected $guarded = []; 
    public function recipes()
    {
        return $this->belongsToMany('App\Ingredient');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Recipe');
    }
    
}
