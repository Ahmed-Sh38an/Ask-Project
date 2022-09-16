<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AskController extends Controller
{
    public function index()
    {
        $user = User::take(15)->get();
        return view('splash', [
            'users' => $user
        ]);
    }

    public function show(User $user)
    {
        return view('profile', [
            'user' => $user,
        ]);
    }
}
