<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // user hasmany questions asked, question belongsto one user

    public function recipient()
    {
        return $this->belongsTo(User::class);
    }

    public function answers()
    {
        return $this->hasOne(Answer::class);
    }
}
