<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
}
