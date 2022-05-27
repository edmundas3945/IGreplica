<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        
        $user = User::find($user);

        return view('home', [
            'user' => $user,

        ]);
    }
}
