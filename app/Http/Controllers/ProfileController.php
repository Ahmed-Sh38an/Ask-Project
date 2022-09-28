<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function show(User $user)
    {
        return view('profile.answers', [
            'user' => $user,
        ]);
    }
    
    public function questions(User $user)
    {
        return view('profile.questions', [
            'user' => $user,
        ]);
    }
    
    public function received(User $user)
    {
        return view('profile.received', [
            'user' => $user,
        ]);
    }
    
    public function edit(User $user)
    {
        return view('profile.edit', [
            'user' => $user
        ]);
    }
}
