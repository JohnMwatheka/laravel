<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'venue',
        'date',
        'tickets',
        'event_image',
        'intro_video',
    ];

    protected $casts = [
        'tickets' => 'array',
        'date' => 'date',
    ];
}
