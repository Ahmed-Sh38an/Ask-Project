<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'recipient_id' => 'required',
            'asker_id' => '',
            'question' => 'min:3|max:255'
        ]);

        
        if (auth()->user()->id == $attributes['asker_id']) {
            Question::create($attributes);
        }elseif ($attributes['asker_id'] == '') {
            Question::create($attributes);
        }else {
            abort(401);
        }
        

        return back()->with('success', 'Question asked.');
    }
}
