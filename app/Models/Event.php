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
    ];

    public function codes()
    {
        return $this->hasMany('App\Models\Code' , 'event_id' , 'id');
    }
}
