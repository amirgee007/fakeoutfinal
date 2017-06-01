<?php
/**
 * Created by PhpStorm.
 * User: Amir
 * Date: 31/5//2017
 * Time: 2:28 PM
 */

namespace App\FakeOut;

use Carbon\Carbon;

Class Helper{


    public static function getNotifications(){
        return \App\Models\Notification::orderBy('created_at', 'desc')->get();
    }

    public static function getNotificationCount(){

        return \App\Models\Notification::whereNull('read_at')->count();
    }

    public static function readNotifications(){

        return \App\Models\Notification::whereNull('read_at')->update([
            'read_at' => Carbon::now()
        ]);
    }




}
