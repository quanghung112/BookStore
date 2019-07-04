<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    public function book()
    {
        return $this->hasMany('App\Book');
    }
}
