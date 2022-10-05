<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        
        return view('register.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'max:255', 'email',  Rule::unique('users', 'email')],
            'password' => ['required', 'max:255', 'min:7'],
            'photo' => ['image'],
        ]);

        if (isset($attributes['photo'])) {
            $attributes['photo'] = request()->file('photo')->store('photos');
        }

        $user = User::create($attributes);

        $redirect = $attributes['username'];

        auth()->login($user);

        return redirect($redirect);
    }
}
