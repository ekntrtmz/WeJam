<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function artists()
    {
        dd(User::all());
    }

    //
    public function artist(User $user)
    {
        $user->load('jams');
        dd($user);
    }

}