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
        return $this->hasMany(Question::class, 'recipient_id')->whereDoesntHave('answer');
    }

    public function questionsAsked()
    {
        return $this->hasMany(Question::class, 'asker_id');
    }

    public function questionsAnswered()
    {
        $asker = User::find('asker_id');
        return $this->hasMany(Question::class, 'recipient_id')->whereHas('answer') ;
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
