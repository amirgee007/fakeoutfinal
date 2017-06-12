<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';

    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'owner_id',
        'name',
        'updated_at',
        'created_at',
        'location',
        'starts_date',
        'start_time',
        'start_time',
        'ends_date',
        'ends_time',
        'image',
        'event_type',
        'ticket_type',
        'comments',

    ];

    public function codes()
    {
        return $this->hasMany('App\Models\Code' , 'event_id' , 'id');
    }
}
