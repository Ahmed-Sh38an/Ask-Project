<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'question_id' => 'required',
            'body' => 'min:2|max:255'
        ]);

        Answer::create($attributes);

        return back();
    }
}
