<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jammer extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //

    public function jam()
    {
        return $this->belongsTo(Jam::class);
    }
}
