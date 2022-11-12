<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(User $user, $questionId)
    {
        $liked = Like::where([
            ['user_id', '=', auth()->user()->id],
            ['question_id', '=', $questionId]
        ])->count();
        
        $status = null;
        if ($liked == 0) {
            Like::create([
                'user_id' => auth()->user()->id,
                'question_id' => $questionId,
            ]);
            $status = 'like';
        }else {
            Like::where([
                ['user_id', '=', auth()->user()->id],
                ['question_id', '=', $questionId]
            ])->delete();
            $status = 'unlike';
        }
        
        $profileQuestionsId = Question::where('recipient_id', '=', $user->id)->pluck('id');
        $likeCount = Like::whereIn('question_id', $profileQuestionsId)->count();
        $result = array('status' => $status, 'likes' => $likeCount);
        return response()->json($result, 200);
    }
}

// remove like column from table