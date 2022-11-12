<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];
    // user hasmany questions asked, question belongsto one user

    public function recipient()
    {
        return $this->belongsTo(User::class);
    }

    public function asker()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
    {
        return $this->hasOne(Answer::class);
    }

    public function like() {
        return $this->hasMany(Like::class);
    }
}
