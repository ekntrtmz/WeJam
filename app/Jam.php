<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jam extends Model
{

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    //

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //
    public function jammers()
    {
        return $this->hasMany(Jammer::class);
    }

    public function yamen()
    {
        return $this->hasMany(Yaman::class);
    }

    protected $guarded = [];

    protected $withCount = ['yamen', 'jammers'];
}
