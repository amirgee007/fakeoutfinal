<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $table = 'events';

    const UPLOAD_PATH = 'uploads/events';
    const DEFAULT_IMAGE = 'uploads/default.png';
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

    public static function getStoragePath() {
        return public_path(static::UPLOAD_PATH);
    }

    public function hasImage() {
        return (!empty($this->image) && strlen($this->image) > 3) ? TRUE : FALSE;
    }

    public function getImageUrl() {

        if (!empty($this->image) && !is_null($this->image) ) {
            if (file_exists(public_path(static::UPLOAD_PATH . '/' . $this->image))){
                return url(static::UPLOAD_PATH . '/' . $this->image);
            }
            return '';
        }

        return '';
    }
}
