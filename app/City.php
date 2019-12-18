<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    public function jams()
    {
        return $this->hasMany(Jam::class);
    }
}
