<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function artists()
    {
        return User::with('jams')->get();
    }

    //
    public function artist(User $user)
    {
        $user->load('jams');
        return $user;
    }

}
