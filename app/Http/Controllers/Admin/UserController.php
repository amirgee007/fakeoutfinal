<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users =User::all();

        return view('admin.user.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = User::firstOrNew(['email' => $request->email]);
        $user->password=encrypt($request->password);
        $user->last_name=$request->last_name;
        $user->department=$request->department;
        $user->user_name=$request->user_name;
        $user->contact_no=$request->contact_no;
        $user->is_admin=isset($request->is_admin)? 1 : 0;

        $user->save();
        session()->flash('alert-success', 'User has been Successfully Created!');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user =User::where('id' , $id)->first();

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {

        $user = User::where('id' , $id)->first();

        $user->update(['title' => $request->title]);
        session()->flash('alert-success', 'User has been Successfully Updated!');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::where('id' , $id) ->delete();
        session()->flash('alert-info', 'User has been Successfully deleted!');

        return redirect()->route('user.index');
    }
}
