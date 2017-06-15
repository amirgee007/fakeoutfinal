<?php

namespace App\Http\Controllers;

use App\Models\Code;
use App\Models\Event;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AppController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function event()
    {
        return view('pages/event/event');
    }
    public function eventAdd()
    {
        return view('pages/event/add');
    }
    public function appLaunch()
    {
        $id = Auth::id();
        $events = Event::where('owner_id', $id)->get();
        $userProfile = UserProfile::where('user_id', $id)->first();

        return view('pages/app' ,compact('events' ,'userProfile'));
    }
    public function eventEdit()
    {
        $id = Auth::id();
        $events = DB::table('events')->where('owner_id', $id)->get();
        //return json_decode(json_encode((array) $events), true);
        //return $data;
        if (isset($events)){
            //$data = json_decode(json_encode((array) $events), true);
            //return $data;
            return view('pages/event/edit', ['data' => $events]);
        }else{
            return view('pages/event/edit');
        }
        //
    }
    // Add logic


    public function eventList($data)
    {
        $id = Auth::id();
        $events = DB::table('events')->where(['owner_id'=> $id, 'id' => $data])->first();
        $codes = DB::table('codes')->where(['event_id'=> $data])->get();
        return view('pages/event/list', ['data' => $events, 'codes' => $codes]);

    }
    public function Add(Request $request)
    {
        if ($request->isMethod('post')) {

            $id = Auth::id();

            $event  =  Event::firstOrCreate(array('name' => $request->input('name'), 'owner_id' => $id));

            $event->location =$request->input('location');
            $event->starts_date =$request->input('starts_date');
            $event->start_time =$request->input('start_time');
            $event->ends_date =$request->input('ends_date');
            $event->ends_time =$request->input('ends_time');
            if ($request->hasFile('image')) {
                $eventImage = $request->file('image');
                $event->image = $fileName = uniqid('event') . '.' . $eventImage->getClientOriginalExtension();
                $fullPath = \App\Models\Event::getStoragePath();
                $eventImage->move($fullPath, $fileName);
            }
            $event->event_type =$request->input('event_type');
            $event->ticket_type =$request->input('ticket_type');
            $event->comments =$request->input('comments');
            $event->save();




            foreach(explode(',' ,$request->input('eventCodes'))  as $code){

                $code  =  Code::firstOrCreate(array('event_id' => $event->id, 'code' => $code));

                $code->update(

                    array('event_id' => $event->id, 'code' => $code->code, 'state' => 'true')
                );
            }


            if ($event){
                session()->flash('alert-success', 'Event has been Successfully Created!');
                return redirect()->route('front.event.add.showBarcode' ,$event->id);
            }

            session()->flash('alert-info', 'Error in Insertion');

            return back();

        }
            return view('pages/event/add', ['data' => $request]);
    }


    public function showBarcode($id){

        $allCodes =  Code::where('event_id' , $id)->orderBy('id')->get()->pluck('code')->toArray();

        if (isset($allCodes)){
            return view('pages.barcodes.barcodeShow', ['allCodes' => $allCodes]);
        }else{
            session()->flash('alert-info', 'Error in Showing Barcode');
            return back();

        }
    }




    protected function validateAdd(Request $request)
    {
        $this->validate($request, [
            'eventCodes' => 'required', 'password' => 'required',
        ]);
    }
    protected function sendFailedAddResponse(Request $request)
    {
        return redirect()->back()
            ->withInput($request->only('eventCodes', 'eventName'))
            ->withErrors([
                'eventCodes' => "Error occured",
                'eventName' => "Error occured",
            ]);
    }
}
