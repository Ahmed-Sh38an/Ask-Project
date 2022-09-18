<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'recipient_id' => 'required',
            'question' => 'min:3|max:255'
        ]);

        Question::create($attributes);

        return back();
    }
}
