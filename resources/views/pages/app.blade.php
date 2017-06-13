@extends('layouts.base')

@section('title')
    Main
    @parent
@stop

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
    .tab-pane { padding: 15px 0; }
    .tab-content{padding:20px}

    .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
    body{ background: #EDECEC; padding:50px}
</style>

@section('content')

    <section id="intro" class="intro">
        <div class="intro-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            @section('dashboard')

                                    <ul class="nav nav-tabs tabs-3 indigo" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab"><i class="fa fa-user" aria-hidden="true"></i>   Personal</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#addEvent" role="tab"><i class="fa fa-plus-square" aria-hidden="true"></i>    Add an event</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#listEvents" role="tab"><i class="fa fa-list-alt" aria-hidden="true"></i>     List events</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#ticketType" role="tab"><i class="fa fa-list-alt" aria-hidden="true"></i>   Ticket Type</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#ticketBlocked" role="tab"><i class="fa fa-plus-square" aria-hidden="true"></i>    Ticket Blocked List</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#notifications" role="tab"><i class="fa fa-bell" aria-hidden="true"></i>   Notifications</a>
                                        </li>

                                    </ul>


                                    <div class="tab-content">
                                        @include('pages.tabs.personal')
                                        @include('pages.tabs.createEvent')
                                        @include('pages.tabs.viewEvents')
                                        @include('pages.tabs.ticketTypes')
                                        @include('pages.tabs.ticketBlockList')
                                        @include('pages.tabs.notifications')
                                    </div>


                                {{--<a href="{{ action("AppController@eventAdd") }}" class="list-group-item">--}}
                                {{--<a href="{{ action("AppController@eventEdit") }}" class="list-group-item">--}}


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
