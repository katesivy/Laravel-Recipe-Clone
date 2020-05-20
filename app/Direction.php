<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $guarded = [];
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
