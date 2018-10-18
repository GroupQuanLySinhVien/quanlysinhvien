<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class admin extends Model
{
	use Notifiable;

     protected $fillable = [
        'name', 'email', 'password',
    ];

     protected $hidden = [
        'password', 'remember_token',
    ];
    
}
