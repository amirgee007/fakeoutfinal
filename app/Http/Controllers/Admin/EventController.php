<?php

namespace App\Http\Controllers\Admin;

use App\Models\Code;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $events = Event::all();

        return view('admin.event.index', compact('events'));

    }

    public function store(Request $request)
    {

        if ($request->isMethod('post')) {

            $id = Auth::id();

            $event  =  Event::firstOrCreate(array('name' => $request->input('eventName'), 'owner_id' => $id));

            foreach(preg_split("/((\r?\n)|(\r\n?))/", $request->input('eventCodes')) as $code){

                $code  =  Code::firstOrCreate(array('event_id' => $event->id, 'code' => $code));


                $code->update(

                    array('event_id' => $event->id, 'code' => $code->code, 'state' => 'true')

                );
            }

            if ($event){
                session()->flash('alert-success', 'Event has been Successfully Created!');
                return back();
            }

            session()->flash('alert-info', 'Error in Insertion');

            return back();


        }

    }


    public function destroy($id){

        $event = Event::where('id' , $id)->first();

        $codeIds = $event->codes->pluck('id');
        $event->delete();
        Code::whereIn('id', $codeIds)->delete();

        session()->flash('alert-info', 'Record Deleted');

        return back();

    }

    public function eventEdit()
    {
        $id = Auth::id();
        $events = DB::table('events')->where('owner_id', $id)->get();

        if (isset($events)){

            return view('pages/event/edit', ['data' => $events]);
        }else{
            return view('pages/event/edit');
        }

    }

    public function eventList($data)
    {
        $id = Auth::id();
        $events = DB::table('events')->where(['owner_id'=> $id, 'id' => $data])->first();
        $codes = DB::table('codes')->where(['event_id'=> $data])->get();
        return view('pages/event/list', ['data' => $events, 'codes' => $codes]);

    }

    protected function attemptAdd(Request $request)
    {
        return true;
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


    ////////////////////for Promoter type/////////////////////////
    public function promoterIndex()
    {
        $events = Event::all();

        return view('admin.promoterEvent.index', compact('events'));

    }

    public function promoterAdd( Request $request)
    {

        return view('admin.promoterEvent.add');

    }

    public function promoterStore(Request $request)
    {

        if ($request->isMethod('post')) {

            $id = Auth::id();

            $event  =  Event::firstOrCreate(array('name' => $request->input('name'), 'owner_id' => $id));

            $event->location =$request->input('location');
            $event->starts_date =$request->input('starts_date');
            $event->start_time =$request->input('start_time');
            $event->ends_date =$request->input('ends_date');
            $event->ends_time =$request->input('ends_time');
            $event->image =$request->input('image');
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
                return redirect()->route('promoterEvents.create.showBarcode' ,$event->id);
            }

            session()->flash('alert-info', 'Error in Insertion');

            return back();


        }

    }

    public function showBarcode($id){

      $allCodes =  Code::where('event_id' , $id)->orderBy('id')->get()->pluck('code')->toArray();

        if (isset($allCodes)){

            return view('admin.barcodes.barcodeShow', ['allCodes' => $allCodes]);
        }else{

            session()->flash('alert-info', 'Error in Showing Barcodes');
            return back();

        }
    }

    public function promoterEdit()
    {
        $id = Auth::id();
        $events = \DB::table('events')->where('owner_id', $id)->get();

        if (isset($events)){

            return view('pages/event/edit', ['data' => $events]);
        }else{
            return view('pages/event/edit');
        }

    }


}
