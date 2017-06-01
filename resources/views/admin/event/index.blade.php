@extends('admin/layout')

@section('title')
    All Event
    @parent
@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Event
                <small>Add Event</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Event</li>
            </ol>
        </section>
        @include('admin.alerts.alert')

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add New Event</h3>
                        </div>


                        <form role="form" method="post" action="{{route('event.add')}}">
                            <div class="box-body">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label for="tittle">Event Name</label>
                                    <input id="eventName" type="text" class="form-control" name="eventName" value="{{ old('eventName') }}"
                                           required autofocus>
                                </div>


                                <div class="form-group">
                                    <label for="tittle">Event Codes</label>
                                    <textarea rows="10" id="eventCodes" type="password" class="form-control" name="eventCodes"
                                              required></textarea>
                                    One entry per line please.
                                </div>




                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Add New</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </section>


        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Events</h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Codes</th>
                            <th>Owner Id</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td>{{$event->id}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{isset($event->codes) ? implode(',',$event->codes->pluck('code')->toarray()) : 'Null'}}</td>
                                <td>{{$event->owner_id}}</td>
                                <td>{!! isset($event->created_at) ? @$event->created_at->diffForHumans() : 'Not Set'!!}</td>
                                <td>

                                    <a href="#"><i class="fa fa-fw fa-pencil text-warning"></i></a>

                                    <a href="#"><i class="fa fa-fw fa-eye text-primary"></i></a>

                                    <a onclick="return confirm('Are you sure to delete ?')" href="{{route('event.delete' , $event->id)}}"><i class="fa fa-fw fa-times text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    </div>
@endsection

@section('footer_scripts')

@endsection

