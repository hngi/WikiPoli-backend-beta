<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postutility extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function post()
    {
        return $this->hasMany('App\posts');
    }
}
