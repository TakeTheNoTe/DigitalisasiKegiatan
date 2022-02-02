<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Log extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'activities', 'id_participants', 'participants', 'description', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
