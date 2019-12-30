<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function jammers()
    {
        return User::with('jams')->get();
    }

    //
    public function jammer(User $user)
    {
        $user->load('jams');
        return $user;
    }

}
