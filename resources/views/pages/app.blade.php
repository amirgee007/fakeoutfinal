@extends('layouts.base')

@section('title')
    Main
    @parent
@stop

@section('content')

    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            @section('dashboard')
                                <div class="panel-heading">Dashboard - Home</div>

                                <a href="{{ action("AppController@eventAdd") }}" class="list-group-item"><i class="fa fa-plus-square" aria-hidden="true"></i>    Add an event</a>
                                <a href="{{ action("AppController@eventEdit") }}" class="list-group-item"><i class="fa fa-list-alt" aria-hidden="true"></i>     List events</a>
                            @show
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/>
    <br/>
    <br/>
    <br/>

@endsection
