<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Activities extends Authenticatable
{

use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name','link', 'date', 'participants', 'open_date', 'close_date', 'start_time', 'end_time', 
    ];
}
