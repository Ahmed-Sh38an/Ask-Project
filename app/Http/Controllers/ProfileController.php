<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')->ignore($user->id)],
            'about' => ['max:255'],
            
            'photo' => ['image'],
        ]);

        if (isset($attributes['photo'])) {

            $attributes['photo'] = request()->file('photo')->store('photos');
        }
        
        $user->update($attributes);
        
        $redirect = $attributes['username'];
        return redirect($redirect);
    }
}
