@extends('pages.app')

@section('title')
    Add Event
    @parent
@stop
@section('dashboard')
    @if  (! empty($data))

        <div class="panel-heading">Event Added!</div>

        <div class="panel-body">
            <p>Your event has been added, view in in your <a href="{{ action("AppController@eventEdit") }}">event list page</a>.</p>
            <p>Below are the entered values.</p>
            <div class="row">
                <div class="col-sm-4">
                    Event Title:
                </div>
                <div class="col-sm-8">
                    <pre>{{ $data->eventName }}</pre>
                </div>
                <div class="col-sm-4">
                    Code Values:
                </div>
                <div class="col-sm-8">
                    <pre>{{ $data->eventCodes }}</pre>
                </div>
            </div>
        </div>
    @else

    @endif

@endsection
