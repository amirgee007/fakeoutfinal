<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{

    protected $table = 'user_profile';

    const UPLOAD_PATH = 'uploads/userProfile';
    const DEFAULT_IMAGE = 'uploads/default.png';

    protected $fillable = ['id' , 'user_id' , 'business_company', 'image', 'id_number' ,
        'address_code' , 'city' , 'country' , 'subscriptions'];


    public function user(){
        return $this->hasOne(\App\User::class , 'user_id' , 'id');
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
