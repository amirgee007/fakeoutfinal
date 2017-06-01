<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'event_id',
        'code',
        'state',
        'updated_at',
        'created_at',
    ];

    public function event(){
        return $this->hasOne(\App\Models\Event::class , 'id' , 'id');
    }
}
