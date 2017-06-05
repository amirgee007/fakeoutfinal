@extends('admin/layout')

@section('title')
    All Event of Promoter
    @parent
@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Event
                <small>Add Event of Promoter</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Event</li>
            </ol>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Events of Promoter</h3>
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

                                    <a onclick="return confirm('Are you sure to delete ?')" href="{{route('promoterEvents.delete' , $event->id)}}"><i class="fa fa-fw fa-times text-danger"></i></a>
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

