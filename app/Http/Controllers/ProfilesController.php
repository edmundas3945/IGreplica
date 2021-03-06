<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        
        $user = User::findOrFail($user);

        return view('profiles/index', [
            'user' => $user,

        ]);
    }
}
