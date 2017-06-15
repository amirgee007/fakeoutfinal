<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UsersProfileController extends Controller
{
    public  function  userProfileShow($id){

        $user = (User::where('id' , $id)->first());
        $userProfile = (UserProfile::where('user_id' , $id)->first());

        return view('pages.user-profile.personalForm', compact('user', 'userProfile' ));

    }

    public  function  userProfilestore(Request $request){

        if ($request->isMethod('post')) {

            $id = Auth::id();

//            $userData = User::where('id' , $id)->first();
            $user =  User::where('id' , $id)->update(['user_name' => $request->input('user_name') , 'email' =>$request->input('email')]);

//            $user = $userData->update(['user_name' =>$request->input('user_name') , 'email' =>$request->input('email') ]);

            $userProfile  =  UserProfile::firstOrCreate(array('user_id' => $id));

            $userProfile->business_company =$request->input('business_company');
            $userProfile->address_code =$request->input('address_code');
            if ($request->hasFile('image')) {
                $userProfileImage = $request->file('image');
                $userProfile->image = $fileName = uniqid('event') . '.' . $userProfileImage->getClientOriginalExtension();
                $fullPath = \App\Models\UserProfile::getStoragePath();
                $userProfileImage->move($fullPath, $fileName);
            }
            $userProfile->city =$request->input('city');
            $userProfile->country =$request->input('country');
            $userProfile->subscriptions =$request->input('subscriptions');
            $userProfile->save();


            if ($userProfile && $user){
                session()->flash('alert-success', 'User Profile has been Successfully Updated!');
                return redirect()->route('app');
            }

        }
        session()->flash('alert-info', 'Error in Insertion');

        return back();

    }
}
