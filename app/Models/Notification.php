<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = ['id' , 'type' , 'data', 'read_at', 'fa_icon'];

    public function getSeenAttribute(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    public  static  function forSomeoneRegister($user){

        $now = \Carbon\Carbon::now()->format('d M Y h:i A');

        static::create([
            'type' => 'New User Register',
            'data' => "User Name: {$user->name} <br> User Email : {$user->email} <br> At : {$now}",
            'fa_icon' => 'fa-user',
        ]);

    }

}
