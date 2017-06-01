<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }




    public function dashboard(Request $request){


        if(Auth::user()->is_admin){
            return view('admin.dashboard');
        }
        Auth::logout();
        return redirect('/admin');


    }




}


