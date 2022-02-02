<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Detailactivities extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dact_id', 'id_activities', 'id_participants', 'activities', 'participants', 'start_time', 'end_time', 'date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
