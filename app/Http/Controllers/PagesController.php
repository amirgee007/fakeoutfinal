<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\User;
use Illuminate\Http\Request;


class PagesController extends Controller
{

    protected $redirectTo = '/app';


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function base()
    {
        return view('pages/index');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function register(Request $request)
    {

        $newUser =  User::create($request->all());

        Notification::forSomeoneRegister($newUser);

        return view('pages/app');

    }
    public function about()
    {
        return view('pages/about');
    }
    public function app()
    {
        return view('pages/app');
    }

}
