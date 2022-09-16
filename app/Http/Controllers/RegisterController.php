<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        $user = User::take(15)->get();
        return view('register', [
            'users' => $user
        ]);
    }

    public function store()
    {

    }
}
