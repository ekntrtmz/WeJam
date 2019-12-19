<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    //  Relationsship to Jam
    //  used in cities.cities and ciities.city
    public function jams()
    {
        return $this->hasMany(Jam::class);
    }

    //  RouteModelBinding with different key/parameter : 'short' instead 'id' (default)
    public function getRouteKeyName()
    {
        return 'short';
    }
}
