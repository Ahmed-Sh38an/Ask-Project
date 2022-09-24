<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'question_id' => 'required',
            'body' => 'min:2|max:255'
        ]);

        $question = Question::find($attributes['question_id']);
        if (auth()->user()->id == $question['recipient_id']) {
            Answer::create($attributes);

            return back();

        }else {
            abort(401);
        }
        
        
    }
}
