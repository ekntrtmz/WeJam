<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jam extends Model
{
    //

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    //

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    //

    public function sinergias()
    {
        return $this->hasMany(Sinergia::class);
    }

    protected $guarded = [];
}
