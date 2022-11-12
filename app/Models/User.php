<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function questionsReceived()
    {
        return $this->hasMany(Question::class, 'recipient_id')->orderByDesc('created_at')->whereDoesntHave('answer');
    }

    public function questionsAsked()
    {
        return $this->hasMany(Question::class, 'asker_id')->orderByDesc('created_at')->whereHas('answer');
    }

    public function questionsAnswered()
    {
        return $this->hasMany(Question::class, 'recipient_id')->orderByDesc('created_at')->whereHas('answer') ;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function postsCount()
    {
        $total = $this->questionsAnswered()->count() + $this->questionsAsked()->count();
                    
        return $total;
    }

    public function like() {
        return $this->hasMany(Like::class);
    }
}
